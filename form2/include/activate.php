<?php
// admin_inactive_profiles.php
// PHP 8.3 compatible — complete page

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// --- DB credentials (use your real values) ---
$host    = "localhost";
	$username="trueloveuser"; // Mysql username
	$password="Truemarriage@2021"; // Mysql password
	$db_name="marriagetruelove"; // Database name

// --- Connect to DB (include db name) ---
$con = mysqli_connect($host, $username, $password, $db_name);
if (!$con) {
    die("DB Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($con, 'utf8mb4');

// --- include functions / header (adjust paths if needed) ---
//include_once("functions.php"); // make sure path is correct
include_once("header.php");    // make sure path is correct

// --- isloggedin corrected ---
function isloggedin(){
    // return true if session id exists
    return isset($_SESSION['id']) && !empty($_SESSION['id']);
}

// Redirect if not logged in
if (!isloggedin()) {
    header("Location: ../userlogin/login.php");
    exit();
}

// Helper: run query and die on error
function runQuery($con, $sql) {
    $res = mysqli_query($con, $sql);
    if (!$res) {
        die("SQL Error: " . mysqli_error($con) . " -- Query: " . htmlspecialchars($sql));
    }
    return $res;
}

// Handle bulk actions (activate, delete, export)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Activate
    if (isset($_POST['submit']) && !empty($_POST['id'])) {
        $all_id = [];
        foreach ($_POST['id'] as $cid) {
            $cust_id = intval($cid);
            $q1 = "UPDATE customer SET profilestat = 1 WHERE cust_id = $cust_id";
            runQuery($con, $q1);

            $q2 = "UPDATE users SET profilestat = 1 WHERE id = $cust_id";
            runQuery($con, $q2);

            $all_id[] = $cust_id;
        }
        $list = implode(', ', $all_id);
        echo "<script>alert('Profiles Activated: $list');</script>";
    }

    // Delete
    if (isset($_POST['delete']) && !empty($_POST['id'])) {
        $all_id = [];
        foreach ($_POST['id'] as $cid) {
            $cust_id = intval($cid);
            $q1 = "DELETE FROM customer WHERE cust_id = $cust_id";
            runQuery($con, $q1);

            $q2 = "DELETE FROM users WHERE id = $cust_id";
            runQuery($con, $q2);

            $all_id[] = $cust_id;
        }
        $list = implode(', ', $all_id);
        echo "<script>alert('Profiles Deleted: $list');</script>";
    }

    // Export
    if (isset($_POST['export']) && !empty($_POST['id'])) {
        $all_id = array_map('intval', $_POST['id']);
        $queryString = http_build_query(['data' => $all_id]);
        header("Location: export_to_excel.php?$queryString");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Inactive Profiles</title>
 <style>
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
}
th, td {
  text-align: left;
  padding: 8px;
  font-size:16px;
  padding-left:10px;
}
th { color:red; }
tr:nth-child(even){background-color: #f2f2f2}
</style>
<script src="../js/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#checkAll").click(function(){
        $(".checkItem").prop('checked', $(this).is(":checked"));
    });
});
</script>
</head>
<body>

<div class="container">
  <h1>Inactive Profiles</h1>

  <form action="" method="post">
    <div style="margin-bottom:10px;">
      <input type="submit" name="submit" value="Activate" onclick="return confirm('Activate selected profiles?')">
      <input type="submit" name="delete" value="Delete" onclick="return confirm('Delete selected profiles?')">
      <input type="submit" name="export" value="Export" onclick="return confirm('Export selected profiles to Excel?')">
    </div>

    <div style="overflow-x:auto;">
      <table>
        <thead>
          <tr>
            <th><input type="checkbox" id="checkAll"><b style="margin-left:10px">All</b></th>
            <th>Profile ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Mob No</th>
            <th>Profile Date</th>
            <th>Password</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>

<?php
// Use robust condition to pick inactive states (handles NULL, '', '0', 0)
$sql2 = "
    SELECT * FROM customer
    WHERE profilestat IS NULL
       OR profilestat = ''
       OR profilestat = '0'
       OR profilestat = 0
    ORDER BY cust_id DESC
";
$result2 = mysqli_query($con, $sql2);
if (!$result2) {
    die("SQL ERROR: " . mysqli_error($con));
}

$rowcount = mysqli_num_rows($result2);
echo '<tr><td colspan="10"><h2 style="color:red">No of Entries = ' . intval($rowcount) . '</h2></td></tr>';

if ($rowcount > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $cust_id = intval($row['cust_id'] ?? 0);
        $name = htmlspecialchars($row['firstname'] ?? '');
        $gender = htmlspecialchars($row['sex'] ?? '');
        $mob = htmlspecialchars($row['mobno'] ?? '');
        $email = htmlspecialchars($row['email'] ?? '');
        $profilecreationdate = htmlspecialchars($row['profilecreationdate'] ?? '');
        $status_display = 'Deactive';

        echo "<tr>
            <td><input type='checkbox' class='checkItem' name='id[]' value='" . $cust_id . "'></td>
            <td>" . $cust_id . "</td>
            <td>" . $name . "</td>
            <td>" . $gender . "</td>
            <td>" . $mob . "</td>
            <td>" . $profilecreationdate . "</td>
            <td>******</td>
            <td>" . $email . "</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='10'>No inactive profiles found.</td></tr>";
}
?>

        </tbody>
      </table>
    </div>
  </form>
</div>

</body>
</html>


