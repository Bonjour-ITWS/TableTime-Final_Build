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


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="resources/style.css" media="all">
  </head>

  <body>
    <header class="p-3 mb-3 border-bottom rpiRed textStyle">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <div class="col-8">
            <a href="index.html">
              <img src="resources/rpiLogo.png" class="rpiLogo">
            </a>
          </div>

          <ul class="nav col-14 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="main.php" class="nav-link px-2 text-white">Reserve A Table</a></li>
            <li><a href="https://covid19.rpi.edu/" class="nav-link px-2 text-white">COVID-19 Policies</a></li>
            <li><a href="aboutus.html" class="nav-link px-2 text-white">About Us</a></li>
          </ul>
        </div>
      </div>
    </header>

    <div class="row mb-3">
      <div class="col-md-3 themed-grid-col">         </div>
      <div class="col-md-6 themed-grid-col text-center">
        <h2 class="mt-4 allignCenter">Covid Map Dashboard</h2>
        <button onclick="change()" type="button" class="btn btn-danger allignCenterAdminBtn" id="covidAdminBtn" value="Enable Covid Maps">Enable Covid Maps</button>
      </div>
      <div class="col-md-3 themed-grid-col">         </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="resources/style.js"></script>
  </body>

  <footer class="d-flex flex-wrap justify-content-between align-items-center border-top rpiGrey textStyle fixed-bottom">
    <p class="col-md-4 mb-0 text-muted">&copy; 2021 Team Bravo</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="main.php" class="nav-link px-2 text-muted">Reserve a Table</a></li>
      <li class="nav-item"><a href="https://covid19.rpi.edu/" class="nav-link px-2 text-muted">COVID-19 Policies</a></li>
      <li class="nav-item"><a href="aboutus.html" class="nav-link px-2 text-muted">About Us</a></li>
             <li class="nav-item"><a href="logout.php" class="nav-link px-2 text-muted">Logout</a></li>

    </ul>
  </footer>
</html>
