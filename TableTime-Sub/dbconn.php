<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "tabletime";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
            echo $row['username'];
            echo " ";
            echo $row['password'];
        }
?>