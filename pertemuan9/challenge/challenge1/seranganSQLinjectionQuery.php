<?php 
$dbc = new PDO("mysql:host=localhost;dbname=customerdb","root","");

$statement = $dbc->query("SELECT firstname, address FROM customer WHERE customerID = {$_GET['customerID']}");

foreach ($statement as $row) {
  echo "<h1>{$row['firstname']}</h1>";
  echo "<p>{$row['address']}</p>";
}

?>