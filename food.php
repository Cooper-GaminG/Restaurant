<?php include "config.php"; ?>

<!DOCTYPE html>

<html>
<head> 
<title> food </title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form action= "food.php" method= "POST">
<div class= "dropdown">
<label class="dropbtn" for="table">Food</label>

  <select class="dropbtn" id="hamburger" name = "hamburger">
    <option class= "content" value="">none</option>
    <option class= "content" value="hamburger 1x">Hamburger 1x</option>
    <option class= "content" value="hamburger 2x">Hamburger 2x</option>
    <option class= "content" value="hamburger 3x">Hamburger 3x</option>
    <option class= "content" value="hamburger 4x">Hamburger 4x</option>
    <option class= "content" value="hamburger 5x">Hamburger 5x</option>

  <input type="submit" name= "submit" value = "Add"  >
  </select> 
</div>

  <div class= "dropdown">
  <select class="dropbtn" id="kip" name = "kip">
    <option class="content" value="">none</option>
    <option class="content" value="kip 1x">kip 1x</option>
    <option class="content" value="kip 2x">kip 2x</option>
    <option class="content" value="kip 3x">kip 3x</option>
    <option class="content" value="kip 4x">kip 4x</option>
    <option class="content" value="kip 5x">kip 5x</option>

  <input type="submit" name= "submit" value = "Add"  >
  </select> 
  </div>


  </select> 

  <div class="dropdown">
  <select class="dropbtn" class="dropbtn" id="fries" name = "fries">
    <option class="content" value="">none</option>
    <option class="content" value="fries 1x">fries 1x</option>
    <option class="content" value="fries deluxe 1x">fries deluxe 1x</option>
    <option class="content" value="fries elite 1x">fries elite 1x</option>
    <option class="content" value="spicey fries 1x">spicey fries 1x</option>
  <input type="submit" name= "submit" value = "Add"  >
  </select> 
  </div>



  </select> 
  <div class="dropdown">
  <select class="dropbtn" id="pizza" name = "pizza">
    <option class="content" value="">none</option>
    <option class="content" value="pizza 1x">pizza 1x</option>
    <option class="content" value="pizza 2x">pizza 2x</option>
    <option class="content" value="pizza 3x">pizza 3x</option>
    <option class="content" value="pizza 4x">pizza 4x</option>
    <option class="content" value="pizza 5x">pizza 5x</option>

  <input type="submit" name= "submit" value = "Add"  >
  </select>
  </div>






<br>
<label class="dropbtn" for="table">Drinks</label>
<div class="dropdown">
<select class="dropbtn" id="cola" name = "cola">
    <option class="content" value="">none</option>
    <option class="content" value="cola 1x">cola 1x</option>
    <option class="content" value="cola 2x">cola 2x</option>
    <option class="content" value="cola 3x">cola 3x</option>
    <option class="content" value="cola 4x">cola 4x</option>
    <option class="content" value="cola 5x">cola 5x</option>

  <input type="submit" name= "submit" value = "Add"  >
  </select> 
  </div>




  <div class="dropdown">
  <select class="dropbtn" id="fanta" name = "fanta">
    <option class="content" value="">none</option>
    <option class="content" value="fanta 1x">fanta 1x</option>
    <option class="content" value="fanta 2x">fanta 2x</option>
    <option class="content" value="fanta 3x">fanta 3x</option>
    <option class="content" value="fanta 4x">fanta 4x</option>
    <option class="content" value="fanta 5x">fanta 5x</option>

  <input type="submit" name= "submit" value = "Add"  >
  </select> 
  </div>



  <div class="dropdown">
  <select class="dropbtn" id="heineken" name = "heineken">
    <option class="content" value="">none</option>
    <option class="content" value="heineken 1x">heineken 1x</option>
    <option class="content" value="heineken 2x">heineken 2x</option>
    <option class="content" value="heineken 3x">heineken 3x</option>
    <option class="content" value="heineken 4x">heineken 4x</option>
    <option class="content" value="heineken 5x">heineken 5x</option>

  <input type="submit" name= "submit" value = "Add"  >
  </select> 
  </div>











<br>

  <label class="dropbtn" for="table">Table Number</label>
  <div class="dropdown">
  <select class="dropbtn" id="table" name = "table">
    <option class="content" value="">none</option>
    <option class="content" value="1">1</option>
    <option class="content" value="2">2</option>
    <option class="content" value="3">3</option>
    <option class="content" value="4">4</option>
    <option class="content" value="5">5</option>
    <option class="content" value="6">6</option>

  <input type="submit" name= "submit" value = "Add"  >
  </select> 
  </div>
  <br><br>


  <!-- <form>
  <label for= "notes">Notes:</label><br>
  <input type="text" id="notes" name="notes" value=""><br>
  <input type="submit" name= "submit" value = "" >
  </form> -->

  <label class="dropbtn" for="table">Payment Method</label>
  <div class="dropdown">
  <select class="dropbtn" id="payment" name = "payment">
    <option class="content" value="ideal">Online</option>
    <option class="content" value="cash">Cash</option>
    <option class="content" value="card">Card</option>

  <input type="submit" name= "submit" value = "Add"  >
  </select> 

<br><br>

  <form>
  <label for= "name">Name:</label><br>
  <input type="text" id="name" name="name"  value="" require><br>
  <input type="submit" name= "submit" value = "Add" >
  </form>

<br>

  <!-- <form>
  <label for= "address">Address:</label><br>
  <input type="text" id="address" name="address" value=""><br>
  <input type="submit" name= "submit" value = "" >
  </form> -->




</form>

 <?php
if (isset($_POST["submit"])){ 
  $_SESSION["kip"] = $_POST["kip"];
$_SESSION["hamburger"] = $_POST["hamburger"];
$_SESSION["fries"] = $_POST["fries"];
$_SESSION["pizza"] = $_POST["pizza"];
$_SESSION["cola"] = $_POST["cola"];
$_SESSION["fanta"] = $_POST["fanta"];
$_SESSION["heineken"] = $_POST["heineken"];
$_SESSION["table"] = $_POST["table"];

// $_SESSION["notes"] = $_POST["notes"];
$_SESSION["payment"] = $_POST["payment"];
$_SESSION["name"] = $_POST["name"];
echo '<div class="order">';
// $_SESSION["address"] = $_POST["address"];
echo "order: </br>";
echo  ($_SESSION["hamburger"]);
echo "</br>";
echo  ($_SESSION["kip"]);
echo "</br>";
echo  ($_SESSION["fries"]);
echo "</br>";
echo  ($_SESSION["pizza"]);
echo "</br>";

echo  ($_SESSION['cola']);
echo "</br>";
echo  ($_SESSION['fanta']);
echo "</br>";
echo  ($_SESSION['heineken']);
echo "</br> table:  ";

echo ($_SESSION["table"]);

// echo "</br> notes  ";
// echo ($_SESSION["notes"]);
echo "</br> payment:  ";
echo ($_SESSION["payment"]);
echo "</br> name:  ";
echo ($_SESSION["name"]);
echo '</div>';
// echo "</br> address  ";
// echo ($_SESSION["address"]);







} 
else 
echo "";





 ?>
<style>
.order{
margin:5px;
font-size: 20px
}

select{
  margin-left: 50px;
  margin-top: 25px;
  margin-bottom: 107px;
}
body
{
  background-image: linear-gradient(red, yellow);
  background-repeat: no-repeat;
}
select{
  /* background-color:	#00ffff; */
}
input{
  background-color:	lightgreen;
}

</style>


<form action= "winkelmand.php" method= "POST">
<input type="submit" name="order" value="Add to cart">

</form>

</body>
</html>
