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
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Folsom 4 Map</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="g.png" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" href="mapStyle.css"/>
	<script type="text/javascript" src="resources/functions.js"></script>
</head>


<body>

	<header>
		<div class="container">
			<nav>
				<ul>
					<?php echo '<li class="nav-link px-1 text-white">'. $test . '</li>'; ?>
					<li><a href="main.php">Home</a></li>
					<li><a href="https://covid19.rpi.edu/">Covid Policies</a></li>
				</ul>
			</nav>

		</div>
	</header>


	<div class="container">
		<img src="resources/floor.png" alt="Folsom 3rd Floor" class="center">

		<!--Tables at Door-->
		<!-- Table 1 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '1' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="1">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 25%; left: 25%;">Reserve Table 1</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="1">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 25%; left: 25%; background-color: black">Occupied Table 1</button>
			</form>
			<?php
		} 
		?>
		<!-- Table 2 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '2' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="2">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 60%; left: 25%;">Reserve Table 2</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="2">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 60%; left: 25%; background-color: black">Occupied Table 2</button>
			</form>
			<?php
		} 
		?>
		<!-- Table 3 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '3' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="3">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 25%; left: 50%;">Reserve Table 3</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="3">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 25%; left: 50%; background-color: black">Occupied Table 3</button>
			</form>
			<?php
		} 
		?>
		<!-- Table 4 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '4' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="4">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 60%; left: 50%;">Reserve Table 4</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="4">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 60%; left: 50%; background-color: black">Occupied Table 4</button>
			</form>
			<?php
		} 
		?>



		<!--Tables at Left-->
		<!-- Table 5 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '5' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="5">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn" style="top: 10%; left: 10%;">Reserve Table 5</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="5">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn" style="top: 10%; left: 10%; background-color: black">Occupied Table 5</button>
			</form>
			<?php
		} 
		?>
		<!-- Table 6 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '6' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="6">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 30%; left: 1%;">Reserve Table 6</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="6">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 30%; left: 1%; background-color: black">Occupied Table 6</button>
			</form>
			<?php
		} 
		?>
		<!-- Table 7 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '7' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="7">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 65%; left: 1%;">Reserve Table 7</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="7">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 65%; left: 1%; background-color: black">Occupied Table 7</button>
			</form>
			<?php
		} 
		?>
		<!-- Table 8 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '8' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="8">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn" style="top: 85%; left: 20%;">Reserve Table 8</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="8">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn" style="top: 85%; left: 20%; background-color: black">Occupied Table 8</button>
			</form>
			<?php
		} 
		?>


		<!--Tables at Right-->
		<!-- Table 9 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '9' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="9">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 30%; left: 65%;">Reserve Table 9</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="9">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 30%; left: 65%; background-color: black">Occupied Table 9</button>
			</form>
			<?php
		} 
		?>
		<!-- Table 10 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '10' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="10">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn" style="top: 10%; left: 70%;">Reserve Table 10</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="10">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn" style="top: 10%; left: 70%; background-color: black">Occupied Table 10</button>
			</form>
			<?php
		} 
		?>
		<!-- Table 11 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '11' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="11">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 30%; left: 85%;">Reserve Table 11</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="11">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 30%; left: 85%; background-color: black">Occupied Table 11</button>
			</form>
			<?php
		} 
		?>
		<!-- Table 12 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '12' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="12">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 65%; left: 85%;">Reserve Table 12</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="12">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn vert" style="top: 65%; left: 85%; background-color: black">Occupied Table 12</button>
			</form>
			<?php
		} 
		?>
		<!-- Table 13 -->
		<?php
		$check1 = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '13' AND Floor ='Folsom 3' ");

		if( mysqli_num_rows($check1) == 0) {
			?>
			<form action = "confirmed.php" method = "post">
				<input type="hidden" id="seat" name="seat" value="13">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn" style="top: 85%; left: 70%;">Reserve Table 13</button>
			</form>
			<?php
		}
		else {
			?>
			<form action = "occupied.html" method = "post">
				<input type="hidden" id="seat" name="seat" value="13">
				<input type="hidden" id="floor" name="floor" value="Folsom 3">
				<button class="btn" style="top: 85%; left: 70%; background-color: black">Occupied Table 13</button>
			</form>
			<?php
		} 
		?>

	</div>
	
	

</body>
