<?php
session_start();

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$databasename = 'teamhype';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
}  
catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <!-- Spot for a logo -->
      <!-- <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="C:\xampp\htdocs\teamhype\images\hype_logo"
          height="15"
          alt=""
          loading="lazy"
        />
      </a> -->
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="food.php">Food</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="drinks.php">Drinks</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    

      <!-- Avatar -->
      <!-- Profile Settings drop down menu -->
      <!-- <a
        class="dropdown-toggle d-flex align-items-center hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
        <img
          src="https://mdbootstrap.com/img/new/avatars/2.jpg"
          class="rounded-circle"
          height="25"
          alt=""
          loading="lazy"
        />
      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
        <li>
          <a class="dropdown-item" href="#">My profile</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">Settings</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">Logout</a>
        </li> -->


      </ul>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

</body>


</html>