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


$sql = "SELECT * FROM `reservation` WHERE `username` = '$test'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if (mysqli_query($conn, $sql)) {
 echo "";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
<?php include "reserve.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reservation Confirmed</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="mapStyle.css"/>
	<script type="text/javascript" src="resources/functions.js"></script>
</head>


<body>

	<header>
		<div class="container">
			<div id="branding">
			</div>
			<nav>
				<ul>
                    <?php echo '<li class="nav-link px-1 text-white">'. $test . '</li>'; ?>
					<li><a href="main.php">Home</a></li>
					<li><a href="https://covid19.rpi.edu/">Covid Policies</a></li>
				</ul>
			</nav>

		</div>
	</header>

	<p style="padding-top: 50px">Thank you!<br>
		This is your confirmation that you've reserved a table.<br>
		<!--
			Display Reservation info here (floor, table number, time)
			example:

			Location: Folsom Floor 3
			Table Number: 2
			Time: 10am - 11am
		-->
		Please head over to your table now to check in within 10 mins.<br>
		You may close this window now.
	</p>
	<!--
	Cancel Reservation Button
	send user to cancel.html
	-->


</body>