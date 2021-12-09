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
		<img src="resources/floor.png" alt="Folsom 4th Floor" class="center">

		<!--Tables at Door-->
        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="1">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn vert" style="top: 25%; left: 25%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 1</button>
        </form>

        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="2">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn vert" style="top: 60%; left: 25%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 2</button>
        </form>

        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="3">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn vert" style="top: 25%; left: 50%;" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 3</button>
        </form>


        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="4">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn vert" style="top: 60%; left: 50%; background-color: black">Reserve Table 4</button>
        </form>



		<!--Tables at Left-->
        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="5">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn" style="top: 10%; left: 10%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 5</button>
        </form>

        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="6">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn vert" style="top: 30%; left: 1%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 6</button>
		</form>

		
        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="7">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn vert" style="top: 65%; left: 1%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 7</button>
		</form>

        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="8">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn" style="top: 85%; left: 20%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 8</button>
		</form>






		<!--Tables at Right-->

        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="9">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn vert" style="top: 30%; left: 65%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 9</button>
		</form>

        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="10">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn" style="top: 10%; left: 70%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 10</button>
		</form>

        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="11">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn vert" style="top: 30%; left: 85%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 11</button>
		</form>

        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="12">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn vert" style="top: 65%; left: 85%" onclick="window.locathion.href='confirm.html'" target="_blank">Reserve Table 12</button>
		</form>

        <form action = "confirmed.php" method = "post">
			<input type="hidden" id="seat" name="seat" value="13">
			<input type="hidden" id="floor" name="floor" value="Folsom 4">
			<button class="btn" style="top: 85%; left: 70%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 13</button>
		</form>

	</div>
	
	

</body>
