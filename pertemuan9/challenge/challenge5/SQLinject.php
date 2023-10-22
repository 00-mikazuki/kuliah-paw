<?php 
$dbc = new PDO("mysql:host=localhost;dbname=customerdb","root","");

$statement = $dbc->prepare("DELETE FROM customer WHERE customerID = :customerID");
$statement->bindValue(":customerID", $_GET['customerID']);
$statement->execute();

header("Location: form_delete.html");
die();
?>