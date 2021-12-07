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
					<li><a href="main.php">Home</a></li>
					<li class="current"><a href="F3map.html">Folsom Maps</a></li>
					<li><a href="union.html">Union Maps</a></li>
					<li><a href="https://covid19.rpi.edu/">Covid Policies</a></li>
				</ul>
			</nav>

		</div>
	</header>



	<div class="container">
		<img src="resources/floor.png" alt="Folsom 4th Floor" class="center">

		<!--Tables at Door-->
		<button class="btn vert" style="top: 25%; left: 25%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 1</button>

		<button class="btn vert" style="top: 60%; left: 25%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 2</button>

		<button class="btn vert" style="top: 25%; left: 50%;" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 3</button>

		<button class="btn vert" style="top: 60%; left: 50%; background-color: black">Occupied</button>


		<!--Tables at Left-->
        <form action = "reserve.php">
		<button class="btn" style="top: 10%; left: 10%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 5</button>
        </form>
		<button class="btn vert" style="top: 30%; left: 1%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 6</button>

		<button class="btn vert" style="top: 65%; left: 1%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 7</button>

		<button class="btn" style="top: 85%; left: 20%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 8</button>


		<!--Tables at Right-->
		<button class="btn vert" style="top: 30%; left: 65%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 9</button>

		<button class="btn" style="top: 10%; left: 70%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 10</button>

		<button class="btn vert" style="top: 30%; left: 85%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 11</button>

		<button class="btn vert" style="top: 65%; left: 85%" onclick="window.locathion.href='confirm.html'" target="_blank">Reserve Table 12</button>

		<button class="btn" style="top: 85%; left: 70%" onclick="window.location.href='confirm.html'" target="_blank">Reserve Table 13</button>
	</div>
	

	

</body>
