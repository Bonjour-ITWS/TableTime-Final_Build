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
  <link rel="shortcut icon" href="g.png" type="image/x-icon"/>
  <title>TableTime</title>
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
          <a href="https://www.rpi.edu/">
            <img src="resources/rpiLogo.png" class="rpiLogo">
          </a>
        </div>

        <ul class="nav col-14 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <?php echo '<li class="nav-link px-1 text-white">'. $test . '</li>'; ?>
          <li><a href="main.php" class="nav-link px-2 text-white">Reserve A Table</a></li>
          <li><a href="https://covid19.rpi.edu/" class="nav-link px-2 text-white">COVID-19 Policies</a></li>
          <li><a href="aboutus.html" class="nav-link px-2 text-white">About Us</a></li>
          <?php 
          if($row['is_admin'] == 1) 
            echo '<li>'. '<a href="admin-covid-dashboard.php" class="nav-link px-2 text-white">Admin Settings</a>' . '</li>'; 
          ?> 


        </ul>
      </div>
    </div>
  </header>

  <div class="container-fluid textStyle">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4" style="color: black;">Buildings</span>
          </a>
          <hr>
          <ul class="nav flex-column">
            <li class="nav-item">
              <INPUT type="radio" name="RadioGroupName" id="GroupName1" onclick="ShowRadioButtonDiv('GroupName', 3)"/>Folsom Library
            </li>

          </ul>
        </div>
      </nav>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div id="GroupName1Div" class="allignCenter" style="display:none;">
          <div class="container">
            <div class="row">
              <div class="col">

              </div>

              <script>
                function toMap(element){
                  document.location.href = element.value
                }
              </script>


              <div class="col-8">
                <div class="middleTitle"> Choose a Floor </div>
                <select style="font-size: 30px;" name="pages" onChange="toMap(this)">
                  <option value="LibraryChooseFloor"> Choose a Floor </option>
                  <option value="F3map.php"> Floor 3 </option>
                  <option value="F4map.php"> Floor 4 </option>
                </select>
                <br>
              </div>
            </div>
          </div>
        </div>


      </main>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="resources/style.js"></script>
</body>

<footer class="d-flex flex-wrap justify-content-between align-items-center border-top rpiGrey textStyle" style="position: absolute; bottom:0; width: 100%">
  <p class="col-md-4 mb-0 text-muted" style="padding-left: 10px">&copy; 2021 Team Bravo</p>

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
