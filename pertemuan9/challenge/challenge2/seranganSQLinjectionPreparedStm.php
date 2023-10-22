<?php 
$dbc = new PDO("mysql:host=localhost;dbname=customerdb","root","");

$statement = $dbc->prepare("SELECT firstname, address FROM customer WHERE customerID = :customerID");
$statement->bindValue(":customerID", $_GET['customerID']);
$statement->execute();

foreach ($statement as $row) {
  echo "<h1>{$row['firstname']}</h1>";
  echo "<p>{$row['address']}</p>";
}

?>