<?php 
session_start(); 
$dbhost= "localhost";
$dbusername= "root";
$dbpassword = "";
$dbname = "tabletime";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (!$conn) {
    echo "Connection failed!";
}

$test = $_SESSION['username'];


$sql = "UPDATE `reservation` SET `End`= `End` + INTERVAL .5 HOUR WHERE `username`= '$test'";
$result = mysqli_query($conn, $sql);
?>


