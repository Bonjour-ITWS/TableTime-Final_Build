<?php 

date_default_timezone_set('America/New_York');


$dbhost= "localhost";
$dbusername= "root";
$dbpassword = "yeet";
$dbname = "tabletime";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (!$conn) {
    echo "Connection failed!";
}

$test = $_SESSION['username'];
$seat = $_POST['seat'];
$floor = $_POST['floor'];

$sql = "UPDATE `reservation` SET `username`='$test', `has_reservation`= 1,`Floor`='$floor',`Seat`= $seat,`Start`= TIME_FORMAT(CURRENT_TIMESTAMP + INTERVAL 10 MINUTE, '%h:%i %p'),`End`= TIME_FORMAT(CURRENT_TIMESTAMP + INTERVAL 1 HOUR, '%h:%i %p'),`has_extended`= 0 WHERE `username`= '$test'";

$result = mysqli_query($conn, $sql);





if (mysqli_query($conn, $sql)) {
 echo "";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//header("Location: confirmed.php");