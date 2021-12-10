<?php 
session_start(); 

$dbhost= "localhost";
$dbusername= "root";
$dbpassword = "yeet";
$dbname = "tabletime";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);


//$result = $mysqli->query("SELECT id FROM mytable WHERE city = 'c7'");

$result = mysqli_query($conn, "SELECT id FROM reservation WHERE Seat = '4' AND Floor ='Folsom 4' ");
if( mysqli_num_rows($result) == 0) {
     // row not found, do stuff...
	echo "not found";
} else {
    // do other stuff...
    echo "found";
}

?>


<!doctype html>
<html lang="en">

<script>
	function toMap(element){
		document.location.href = element.value
	}
</script>

<select style="font-size: 30px;" name="pages" onChange="toMap(this)">
	<option value="LibraryChooseFloor"> Choose a Floor </option>
	<option value="LibraryFloor1"> Floor 1 </option>
	<option value="LibraryFloor2"> Floor 2 </option>
	<option value="LibraryFloor3"> Floor 3 </option>
	<option value="F4map.php"> Floor 4 </option>
</select>
<br>
</div>
<div class="col">
	<button type="button" class="btn btn-danger rightButton" onClick="toMap()">Next</button>
</div>