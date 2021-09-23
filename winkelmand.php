<?php include "config.php";

  $stmt = $conn->prepare("INSERT INTO orders (woord)
  VALUES (:woord)");
  $stmt->bindParam(':woord', $woord);

  $woord = "zet hem op";
  $stmt->execute();

  //last insert ID

  $sql_query = ("SELECT last insert(id) FROM orders");

  $stmt = $conn->prepare($sql_query);

  $stmt->execute();

  $result = $stmt->fetch();

  echo $result[0];
  
if (isset($_SESSION["order2"]))
echo  ($_SESSION["hamburger"]);
echo "</br>";
echo  ($_SESSION["kip"]);
echo "</br>";
echo  ($_SESSION["fries"]);
echo "</br>";
echo  ($_SESSION["pizza"]);
echo "</br>";

echo  ($_SESSION['cola']);
echo "</br>   ";
echo  ($_SESSION['fanta']);
echo "</br>  ";
echo  ($_SESSION['heineken']);
echo "</br> table:  ";
echo ($_SESSION["table"]);

// echo "</br> notes  ";
// echo ($_SESSION["notes"]);
echo "</br> payment:  ";
echo ($_SESSION["payment"]);
echo "</br> name:  ";
echo ($_SESSION["name"]);

$hamburger = $_SESSION["hamburger"];
$kip = $_SESSION['kip'];
$fries = $_SESSION["fries"];
$pizza = $_SESSION["pizza"];

$cola = $_SESSION["cola"];
$fanta = $_SESSION["fanta"];
$heineken = $_SESSION["heineken"];
$id = $result;

$arrayf = array ($hamburger, $kip, $fries, $pizza);

$arrayd = array ($cola, $fanta, $heineken);


foreach($arrayd as $drinks){
foreach($arrayf as $food){
  $stmt = $conn->prepare("INSERT INTO food_order (order_id, food, drinks, status)
  VALUES (:order_id, :food, :drinks, :status)");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':food', $food);
  $stmt->bindParam(':drinks', $drinks);
  // $stmt->bindParam(':address', $_SESSION['address']);
  $stmt->bindParam(':status', $status);

  $status = "1";
  // $order_notes = "Order Notes Here";
  // $address = "Address Here";

  $stmt->execute();
}
}
  echo " <br><br>  Order successfully placed!";

?>