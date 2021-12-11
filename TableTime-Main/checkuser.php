<?php 

session_start(); 

date_default_timezone_set('America/New_York');


$dbhost= "localhost";
$dbusername= "root";
$dbpassword = "";
$dbname = "tabletime";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (!$conn) {
    echo "Connection failed!";
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);
}

$sql_u = "SELECT * FROM reservation WHERE username='$uname'";
$res_u = mysqli_query($conn, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
    header("Location: unique.php");
} 	
if(mysqli_num_rows($res_u) == 0)
{
    $sql_r = "INSERT INTO `reservation`(`username`, `password`, `has_reservation`, `Floor`, `Seat`, `Start`, `End`, `has_extended`, `is_admin`) VALUES ('$uname','$pass',0,'','','','',0,0)";
    $res_r = mysqli_query($conn, $sql_r);
    header("Location: index.php");
}