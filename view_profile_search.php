<?php
// profiles.php
// Full page (HTML + PHP) - PHP 8.3 compatible
// Uses include('db.php') and $con as DB connection.

// Start session and includes
//session_start();

// Adjust error reporting for development (turn off in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "includes/basic_includes.php";
include_once "functions.php";
include_once "db.php"; // <- Must create this; it should set $con (mysqli connection)

// Simple helper for safe echo
function h($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8');
}

// --- Ensure DB connection exists ---
if (!isset($con) || !($con instanceof mysqli)) {
    // If db.php uses a different variable, update accordingly.
    die("Database connection not found. Make sure db.php sets \$con = mysqli_connect(...).");
}

// --- Check login ---
if (!function_exists('isloggedin')) {
    // Minimal fallback - if your functions.php defines isloggedin(), this won't run.
    function isloggedin() {
        return isset($_SESSION['user_id']);
    }
}

if (!isloggedin()) {
    header("Location: login.php");
    exit();
}

// --- Validate ID (logged-in user id) ---
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === null || $id === false) {
    // Try from session (commonly stored)
    $id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
}

// --- Handle incoming POST (search form) ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Simple anti-CSRF: optional - if you have a token flow, validate here.

    // Set session filters from POST (safe defaults)
    $_SESSION['maritalstatus'] = $_POST['maritalstatus'] ?? 'any';
    $_SESSION['state']         = $_POST['state'] ?? 'any';
    $_SESSION['religion']      = $_POST['religion'] ?? 'any';
    $_SESSION['mothertounge']  = $_POST['mothertounge'] ?? 'any';
    $_SESSION['sex']           = $_POST['sex'] ?? ($_SESSION['sex'] ?? 'Female');
    $_SESSION['caste']         = $_POST['caste'] ?? 'any';
    $_SESSION['with_photo']    = $_POST['with_photo'] ?? ($_SESSION['with_photo'] ?? 'no');

    // Age inputs
    $min = $_POST['agemin'] ?? '';
    $max = $_POST['agemax'] ?? '';
    if ($min === '' && $max === '') {
        $_SESSION['agemin'] = 18;
        $_SESSION['agemax'] = 80;
    } else {
        $_SESSION['agemin'] = max(18, intval($min));
        $_SESSION['agemax'] = min(120, intval($max));
        if ($_SESSION['agemin'] > $_SESSION['agemax']) {
            // swap if inverted
            $tmp = $_SESSION['agemin'];
            $_SESSION['agemin'] = $_SESSION['agemax'];
            $_SESSION['agemax'] = $tmp;
        }
    }

    // After post, redirect to avoid form resubmission on reload (PRG)
    $redirect_url = strtok($_SERVER["REQUEST_URI"], '?'); // current script without query
    header("Location: " . $redirect_url);
    exit();
}

// --- On GET / first load: initialize session filters if not set ---
if (!isset($_SESSION['maritalstatus'])) $_SESSION['maritalstatus'] = 'any';
if (!isset($_SESSION['state'])) $_SESSION['state'] = 'any';
if (!isset($_SESSION['religion'])) $_SESSION['religion'] = 'any';
if (!isset($_SESSION['mothertounge'])) $_SESSION['mothertounge'] = 'any';
if (!isset($_SESSION['caste'])) $_SESSION['caste'] = 'any';
if (!isset($_SESSION['with_photo'])) $_SESSION['with_photo'] = 'no';
if (!isset($_SESSION['agemin'])) $_SESSION['agemin'] = 18;
if (!isset($_SESSION['agemax'])) $_SESSION['agemax'] = 80;

// --- Determine opposite gender default using logged-in user's gender (if available) ---
$logged_user_gender = null;
if ($id > 0) {
    $sql_gender = "SELECT gender FROM users WHERE id = ? LIMIT 1";
    $stmt = mysqli_prepare($con, $sql_gender);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $gender_from_db);
        if (mysqli_stmt_fetch($stmt)) {
            $logged_user_gender = $gender_from_db;
        }
        mysqli_stmt_close($stmt);
    }
}
if (!$logged_user_gender) {
    // fallback if DB missing gender
    $logged_user_gender = $_SESSION['gender'] ?? 'Male';
}
// Opposite gender
$default_opposite = ($logged_user_gender === 'Male') ? 'Female' : 'Male';
// If session sex not set by user, set to opposite
if (empty($_SESSION['sex'])) {
    $_SESSION['sex'] = $default_opposite;
}

// --- Assign local variables from session (safe) ---
$maritalstatus = $_SESSION['maritalstatus'] ?? 'any';
$state         = $_SESSION['state'] ?? 'any';
$religion      = $_SESSION['religion'] ?? 'any';
$mothertounge  = $_SESSION['mothertounge'] ?? 'any';
$caste         = $_SESSION['caste'] ?? 'any';
$with_photo    = $_SESSION['with_photo'] ?? 'no';
$agemin        = intval($_SESSION['agemin'] ?? 18);
$agemax        = intval($_SESSION['agemax'] ?? 80);
$sex           = $_SESSION['sex'] ?? $default_opposite;

// --- Pagination vars (GET) ---
$page_no = filter_input(INPUT_GET, 'page_no', FILTER_VALIDATE_INT);
$page_no = ($page_no && $page_no > 0) ? $page_no : 1;
$total_records_per_page = 10;
$offset = ($page_no - 1) * $total_records_per_page;

// --- Build WHERE clauses safely ---
$where_clauses = [];
$where_clauses[] = "profilestat = 1";

// age numeric bounds
$where_clauses[] = "age BETWEEN " . intval($agemin) . " AND " . intval($agemax);

// sex exactly
$where_clauses[] = "sex = '" . mysqli_real_escape_string($con, $sex) . "'";

// optional filters
if ($maritalstatus !== 'any') {
    $where_clauses[] = "maritalstatus = '" . mysqli_real_escape_string($con, $maritalstatus) . "'";
}
if ($state !== 'any') {
    $where_clauses[] = "state = '" . mysqli_real_escape_string($con, $state) . "'";
}
if ($religion !== 'any') {
    $where_clauses[] = "religion = '" . mysqli_real_escape_string($con, $religion) . "'";
}
if ($mothertounge !== 'any') {
    $where_clauses[] = "mothertounge = '" . mysqli_real_escape_string($con, $mothertounge) . "'";
}
if ($caste !== 'any') {
    $where_clauses[] = "caste = '" . mysqli_real_escape_string($con, $caste) . "'";
}
if ($with_photo === 'with_photo') {
    $where_clauses[] = "photo_status = 1";
}

// join where
$where = implode(" AND ", $where_clauses);

// --- Query total count for pagination ---
$sql_count = "SELECT COUNT(*) AS total_records FROM customer WHERE $where";
$res_count = mysqli_query($con, $sql_count);
$total_records = 0;
if ($res_count) {
    $rowc = mysqli_fetch_assoc($res_count);
    $total_records = intval($rowc['total_records'] ?? 0);
    mysqli_free_result($res_count);
}

// compute pages
$total_no_of_pages = ($total_records > 0) ? ceil($total_records / $total_records_per_page) : 1;
$second_last = max(1, $total_no_of_pages - 1);

// --- Fetch paginated results ---
$sql_fetch = "SELECT * FROM customer WHERE $where ORDER BY cust_id DESC LIMIT ?, ?";
$stmt = mysqli_prepare($con, $sql_fetch);
$profiles = [];
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ii", $offset, $total_records_per_page);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    if ($res) {
        while ($r = mysqli_fetch_assoc($res)) {
            $profiles[] = $r;
        }
        mysqli_free_result($res);
    }
    mysqli_stmt_close($stmt);
} else {
    // If prepare fails (some MySQL versions don't allow LIMIT placeholders), build with int values instead:
    $sql_fetch_raw = "SELECT * FROM customer WHERE $where ORDER BY cust_id DESC LIMIT $offset, $total_records_per_page";
    $res2 = mysqli_query($con, $sql_fetch_raw);
    if ($res2) {
        while ($r = mysqli_fetch_assoc($res2)) $profiles[] = $r;
        mysqli_free_result($res2);
    }
}

// Optionally for debugging: uncomment to view the SQL
// echo "<pre>" . h($sql_fetch) . "\nWHERE: " . h($where) . "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sagun Matrimonial - Profiles</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS / Plugins (keep your existing filepaths) -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
  <link rel="stylesheet" href="plugins/animate.css">
  <link rel="stylesheet" href="plugins/prettyPhoto.css">
  <link rel="stylesheet" href="plugins/owl/owl.carousel.css">
  <link rel="stylesheet" href="plugins/owl/owl.theme.css">
  <link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link id="style-switch" href="css/presets/preset3.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="icon" href="img/ganesh.png" type="image/x-icon" />

  <!-- jQuery UI for age slider -->
  <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
  <script src="plugins/jQuery/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

  <style>
    /* small style fixes to match your original look */
    .table_working_hours { width:100%; border-collapse:collapse; }
    .table_working_hours td { padding:6px 10px; vertical-align:middle; }
    .day_label { font-weight:bold; width:120px; color:#333; }
    .day_value { color:#444; }
    .pagination { list-style:none; padding:0; display:flex; gap:6px; }
    .pagination li { display:inline-block; padding:6px 8px; border:1px solid #ddd; border-radius:4px; }
    .pagination li a { text-decoration:none; color:#333; }
    .pagination li.active { background:#007bff; color:#fff; }
    .pagination li.disabled { opacity:0.5; pointer-events:none; }
  </style>
</head>
<body>
<div class="body-inner">

  <!-- header -->
  <?php include_once("includes/header.php"); ?>

  <div id="banner-area">
    <img src="images/banner/heart2.jpg" alt="" />
    <div class="banner-title-content">
      <div class="text-center">
        <h2>Welcome In User dashboard</h2>
      </div>
    </div>
  </div>

  <div style="width:100%; padding:20px;">
    <div class="row">
      <!-- Left: Filters -->
      <div class="col-sm-3 col-md-6 col-lg-4" style="background-color:#EEEEEE;padding:20px;">
        <form action="" method="post">
          <center><label style="color:red;font-size:18px;">Refine Your Search</label></center>
          <table style="width:100%;">
            <tr>
              <td colspan="2">
                <!-- Gender radio (hidden in original) -->
                <input type="radio" hidden name="sex" id="male" value="Male" <?php if($sex==='Male') echo 'checked'; ?>>
                <input type="radio" hidden name="sex" id="female" value="Female" <?php if($sex==='Female') echo 'checked'; ?>>
                <script>
                  // keep radios in sync (if you want visible controls, change this)
                </script>
              </td>
            </tr>

            <tr>
              <td align="right"><label for="maritalstatus">Marital Status :</label></td>
              <td>
                <select name="maritalstatus" id="maritalstatus" class="form-control">
                  <option value="any"> Any </option>
                  <option value="Never Married">Single</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Widowed">Widowed</option>
                  <option value="Separated">Separated</option>
                </select>
                <script>document.getElementById('maritalstatus').value = "<?php echo h($maritalstatus); ?>";</script>
              </td>
            </tr>

            <tr>
              <td align="right"><label for="state">State :</label></td>
              <td>
                <select name="state" id="state" class="form-control">
                  <option value="any"> Any </option>
                  <!-- keep the same long list you had; compressed here for brevity -->
                  <?php
                    // If you want to keep the full list as original, paste it here.
                    $states = [
                        "Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat",
                        "Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala",
                        "Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Odisha",
                        "Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttarakhand",
                        "Uttar Pradesh","West Bengal","Andaman and Nicobar Islands","Chandigarh",
                        "Dadra and Nagar Haveli","Daman and Diu","Delhi","Lakshadweep","Puducherry"
                    ];
                    foreach ($states as $st) {
                        $val = " " . $st . " ";
                        echo '<option value="'.h($val).'">'.h($st).'</option>';
                    }
                  ?>
                </select>
                <script>document.getElementById('state').value = "<?php echo h($state); ?>";</script>
              </td>
            </tr>

            <tr>
              <td align="right"><label for="religion">Religion :</label></td>
              <td>
                <select name="religion" id="religion" class="form-control">
                  <option value="any"> Any </option>
                  <option value="Buddhist">Buddhist</option>
                  <option value="Christian">Christian</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Inter_Religion">Inter Religion</option>
                  <option value="Jain">Jain</option>
                  <option value="Jewish">Jewish</option>
                  <option value="Muslim">Muslim</option>
                  <option value="No_Religion">No Religion</option>
                  <option value="Parsi">Parsi</option>
                  <option value="Sikh">Sikh</option>
                </select>
                <script>document.getElementById('religion').value = "<?php echo h($religion); ?>";</script>
              </td>
            </tr>

            <tr>
              <td align="right"><label for="caste">Caste :</label></td>
              <td>
                <select name="caste" id="caste" class="form-control">
                  <option value="any"> Any </option>
                  <!-- keep full caste list if you want; here we show a few examples -->
                  <option value="Brahmin">Brahmin</option>
                  <option value="Kshatriya">Kshatriya</option>
                  <option value="Vaishya">Vaishya</option>
                  <option value="SC">SC</option>
                  <option value="ST">ST</option>
                </select>
                <script>document.getElementById('caste').value = "<?php echo h($caste); ?>";</script>
              </td>
            </tr>

            <tr>
              <td align="right"><label for="mothertounge">Mother Tongue :</label></td>
              <td>
                <select name="mothertounge" id="mothertounge" class="form-control">
                  <option value="any"> Any </option>
                  <option value="English">English</option>
                  <option value="Hindi">Hindi</option>
                </select>
                <script>document.getElementById('mothertounge').value = "<?php echo h($mothertounge); ?>";</script>
              </td>
            </tr>

            <tr>
              <td align="right"><label>Photo :</label></td>
              <td>
                <label><input type="radio" name="with_photo" value="with_photo" <?php if($with_photo==='with_photo') echo 'checked'; ?>> With Photo</label>
                <label style="margin-left:10px;"><input type="radio" name="with_photo" value="without_photo" <?php if($with_photo!=='with_photo') echo 'checked'; ?>> Without Photo</label>
              </td>
            </tr>

            <tr>
              <td align="right"><label>Age :</label></td>
              <td>
                <input type="hidden" name="agemin" id="agemin" value="<?php echo h($agemin); ?>">
                <input type="hidden" name="agemax" id="agemax" value="<?php echo h($agemax); ?>">
                <input type="text" readonly id="price2" value="Min <?php echo h($agemin); ?> - Max <?php echo h($agemax); ?>" style="border:0; color:red; font-weight:bold;text-align:center;margin-bottom:5px">
                <input type="text" readonly id="price" hidden style="border:0; color:red; font-weight:bold;text-align:center;margin-bottom:5px">
                <div id="slider-3"></div>
                <script>
                $(function() {
                    $("#slider-3").slider({
                        range: true,
                        min: 18,
                        max: 80,
                        values: [ <?php echo intval($agemin); ?>, <?php echo intval($agemax); ?> ],
                        slide: function(event, ui) {
                            $("#price").val("Min" + ui.values[0] + " - Max" + ui.values[1]);
                            document.getElementById("agemin").value = ui.values[0];
                            document.getElementById("agemax").value = ui.values[1];
                            document.getElementById("price2").value = "Min " + ui.values[0] + " - Max " + ui.values[1];
                            document.getElementById("price2").hidden = false;
                        }
                    });
                });
                </script>
              </td>
            </tr>

            <tr>
              <td></td>
              <td align="center">
                <input class="btn btn-primary solid" type="submit" name="search2" value="Search">
              </td>
            </tr>

          </table>
        </form>
      </div>

      <!-- Right: Results -->
      <div class="col-sm-9 col-md-6 col-lg-8" style="padding:50px; background-image:url('images/bg2.jpg'); background-size:cover; background-attachment:fixed;">

        <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
          <strong>Page <?php echo h($page_no . " of " . $total_no_of_pages); ?></strong>
        </div>

        <!-- Pagination links (top) -->
        <ul class="pagination" aria-label="Pagination">
          <?php if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

          <li <?php if($page_no <= 1) echo "class='disabled'"; ?>>
            <a <?php if($page_no > 1) echo "href='?page_no=" . ($page_no-1) . "'"; ?>>Previous</a>
          </li>

          <?php
          if ($total_no_of_pages <= 10) {
              for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                  if ($counter == $page_no) {
                      echo "<li class='active'><a>" . h($counter) . "</a></li>";
                  } else {
                      echo "<li><a href='?page_no=$counter'>" . h($counter) . "</a></li>";
                  }
              }
          } elseif ($total_no_of_pages > 10) {
              if ($page_no <= 4) {
                  for ($counter = 1; $counter < 8; $counter++) {
                      if ($counter == $page_no) echo "<li class='active'><a>" . h($counter) . "</a></li>";
                      else echo "<li><a href='?page_no=$counter'>" . h($counter) . "</a></li>";
                  }
                  echo "<li><a>...</a></li>";
                  echo "<li><a href='?page_no=$second_last'>" . h($second_last) . "</a></li>";
                  echo "<li><a href='?page_no=$total_no_of_pages'>" . h($total_no_of_pages) . "</a></li>";
              } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
                  echo "<li><a href='?page_no=1'>1</a></li>";
                  echo "<li><a href='?page_no=2'>2</a></li>";
                  echo "<li><a>...</a></li>";
                  for ($counter = $page_no - 2; $counter <= $page_no + 2; $counter++) {
                      if ($counter == $page_no) echo "<li class='active'><a>" . h($counter) . "</a></li>";
                      else echo "<li><a href='?page_no=$counter'>" . h($counter) . "</a></li>";
                  }
                  echo "<li><a>...</a></li>";
                  echo "<li><a href='?page_no=$second_last'>" . h($second_last) . "</a></li>";
                  echo "<li><a href='?page_no=$total_no_of_pages'>" . h($total_no_of_pages) . "</a></li>";
              } else {
                  echo "<li><a href='?page_no=1'>1</a></li>";
                  echo "<li><a href='?page_no=2'>2</a></li>";
                  echo "<li><a>...</a></li>";
                  for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                      if ($counter == $page_no) echo "<li class='active'><a>" . h($counter) . "</a></li>";
                      else echo "<li><a href='?page_no=$counter'>" . h($counter) . "</a></li>";
                  }
              }
          }
          ?>

          <li <?php if($page_no >= $total_no_of_pages) echo "class='disabled'"; ?>>
            <a <?php if($page_no < $total_no_of_pages) echo "href='?page_no=" . ($page_no+1) . "'"; ?>>Next</a>
          </li>
          <?php if ($page_no < $total_no_of_pages) { echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>"; } ?>
        </ul>

        <br>

        <?php
        // Display profiles
        if (!empty($profiles)) {
            foreach ($profiles as $row) {
                $profileid      = intval($row['cust_id'] ?? 0);
                $fname          = $row['firstname'] ?? '';
                $lname          = $row['lastname'] ?? '';
                $sex_row        = $row['sex'] ?? '';
                $dob            = $row['dateofbirth'] ?? '';
                $religion_row   = $row['religion'] ?? '';
                $caste_row      = $row['caste'] ?? '';
                $state_row      = $row['state'] ?? '';
                $marital_row    = $row['maritalstatus'] ?? '';
                $profileby      = $row['profilecreatedby'] ?? '';
                $education      = $row['education'] ?? '';
                $mothertounge_row = $row['mothertounge'] ?? '';
                $height         = $row['height'] ?? '';
                $aboutme        = $row['aboutme'] ?? '';

                // age calculation
                $age_display = "N/A";
                if (!empty($dob) && strtotime($dob) !== false) {
                    $age_display = date('Y') - date('Y', strtotime($dob));
                }

                // fetch photo - look for photos table entry
                $pic1 = "img/" . (strtolower($sex_row) === 'male' ? "male.png" : "female.png");
                $sql2 = "SELECT pic1 FROM photos WHERE cust_id = ? LIMIT 1";
                $stmt2 = mysqli_prepare($con, $sql2);
                if ($stmt2) {
                    mysqli_stmt_bind_param($stmt2, "i", $profileid);
                    mysqli_stmt_execute($stmt2);
                    mysqli_stmt_bind_result($stmt2, $picname);
                    if (mysqli_stmt_fetch($stmt2) && !empty($picname)) {
                        $pic1 = "profile/$profileid/" . $picname;
                    }
                    mysqli_stmt_close($stmt2);
                } else {
                    // fallback query if prepare fails
                    $res3 = mysqli_query($con, "SELECT pic1 FROM photos WHERE cust_id = $profileid LIMIT 1");
                    if ($res3 && $r3 = mysqli_fetch_assoc($res3)) {
                        if (!empty($r3['pic1'])) $pic1 = "profile/$profileid/" . $r3['pic1'];
                        mysqli_free_result($res3);
                    }
                }
                ?>
                <br>
                <table class="table_working_hours" width="100%" style="background-image:url('images/frame4.jpg'); background-size:820px 320px; background-repeat:no-repeat; background-position:center; border-radius:25px;">
                    <tbody>
                        <tr>
                            <td class="day_value" style="text-align:center;">
                                <div style="font-size:22px;color:red;">
                                    <a href="view_profile.php?id=<?php echo h($profileid); ?>" style="color:red;" target="_blank">
                                        <?php echo h("$fname $lname (SM$profileid)"); ?>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="8" style="text-align:center;">
                                <center>
                                    <img src="<?php echo h($pic1); ?>" style="width:170px;height:200px;border-radius:80%;" alt="profile photo">
                                </center>
                            </td>
                        </tr>

                        <tr><td class="day_label">Age :</td><td class="day_value"><?php echo h($age_display); ?> Years</td></tr>
                        <tr><td class="day_label">Height :</td><td class="day_value"><?php echo h($height); ?></td></tr>
                        <tr><td class="day_label">Religion :</td><td class="day_value"><?php echo h($religion_row); ?></td></tr>
                        <tr><td class="day_label">Marital Status :</td><td class="day_value"><?php echo h($marital_row); ?></td></tr>
                        <tr><td class="day_label">State :</td><td class="day_value"><?php echo h($state_row); ?></td></tr>
                        <tr><td class="day_label">Profile Created by :</td><td class="day_value"><?php echo h($profileby); ?></td></tr>
                        <tr><td class="day_label">Education :</td><td class="day_value"><?php echo h($education); ?></td></tr>

                        <tr align="right">
                            <td colspan="3" align="right">
                                <a href="view_profile.php?id=<?php echo h($profileid); ?>" target="_blank" class="btn btn-primary solid">View Profile</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <?php
            } // end foreach profiles
        } else {
            echo "<div class='alert alert-info'>No profiles found for the selected filters.</div>";
        }
        ?>

        <!-- Pagination bottom (duplicate) -->
        <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
          <strong>Page <?php echo h($page_no . " of " . $total_no_of_pages); ?></strong>
        </div>

        <ul class="pagination" aria-label="Pagination">
          <?php if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

          <li <?php if($page_no <= 1) echo "class='disabled'"; ?>>
            <a <?php if($page_no > 1) echo "href='?page_no=" . ($page_no-1) . "'"; ?>>Previous</a>
          </li>

          <?php
          // same logic as above to render numbered pages
          if ($total_no_of_pages <= 10) {
              for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                  if ($counter == $page_no) {
                      echo "<li class='active'><a>" . h($counter) . "</a></li>";
                  } else {
                      echo "<li><a href='?page_no=$counter'>" . h($counter) . "</a></li>";
                  }
              }
          } else {
              if ($page_no <= 4) {
                  for ($counter = 1; $counter < 8; $counter++) {
                      if ($counter == $page_no) echo "<li class='active'><a>" . h($counter) . "</a></li>";
                      else echo "<li><a href='?page_no=$counter'>" . h($counter) . "</a></li>";
                  }
                  echo "<li><a>...</a></li>";
                  echo "<li><a href='?page_no=$second_last'>" . h($second_last) . "</a></li>";
                  echo "<li><a href='?page_no=$total_no_of_pages'>" . h($total_no_of_pages) . "</a></li>";
              } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
                  echo "<li><a href='?page_no=1'>1</a></li>";
                  echo "<li><a href='?page_no=2'>2</a></li>";
                  echo "<li><a>...</a></li>";
                  for ($counter = $page_no - 2; $counter <= $page_no + 2; $counter++) {
                      if ($counter == $page_no) echo "<li class='active'><a>" . h($counter) . "</a></li>";
                      else echo "<li><a href='?page_no=$counter'>" . h($counter) . "</a></li>";
                  }
                  echo "<li><a>...</a></li>";
                  echo "<li><a href='?page_no=$second_last'>" . h($second_last) . "</a></li>";
                  echo "<li><a href='?page_no=$total_no_of_pages'>" . h($total_no_of_pages) . "</a></li>";
              } else {
                  echo "<li><a href='?page_no=1'>1</a></li>";
                  echo "<li><a href='?page_no=2'>2</a></li>";
                  echo "<li><a>...</a></li>";
                  for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                      if ($counter == $page_no) echo "<li class='active'><a>" . h($counter) . "</a></li>";
                      else echo "<li><a href='?page_no=$counter'>" . h($counter) . "</a></li>";
                  }
              }
          }
          ?>

          <li <?php if($page_no >= $total_no_of_pages) echo "class='disabled'"; ?>>
            <a <?php if($page_no < $total_no_of_pages) echo "href='?page_no=" . ($page_no+1) . "'"; ?>>Next</a>
          </li>
          <?php if ($page_no < $total_no_of_pages) { echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>"; } ?>
        </ul>

      </div> <!-- end right col -->
    </div>
  </div>

  <?php include_once("includes/footer.php"); ?>
  <?php include_once("includes/copyright.php"); ?>

</div> <!-- body-inner -->

<!-- scripts -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/style-switcher.js"></script>
<script src="plugins/owl/owl.carousel.js"></script>
<script src="plugins/jquery.prettyPhoto.js"></script>
<script src="plugins/flex-slider/jquery.flexslider.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/isotope.js"></script>
<script src="plugins/ini.isotope.js"></script>
<script src="plugins/wow.min.js"></script>
<script src="plugins/jquery.easing.1.3.js"></script>
<script src="plugins/jquery.counterup.min.js"></script>
<script src="plugins/waypoints.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
