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


$sql = "UPDATE `reservation` SET `username`='$test', `has_reservation`= 0,`Floor`='',`Seat`= '',`Start`= '',`End`= '',`has_extended`= 0 WHERE `username`= '$test'";

$result = mysqli_query($conn, $sql);





if (mysqli_query($conn, $sql)) {
 echo "";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//header("Location: confirmed.php");