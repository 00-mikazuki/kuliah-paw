<?php 
$dbc = new PDO("mysql:host=localhost;dbname=customerdb","root","");

$statement = $dbc->prepare("INSERT INTO customer (firstname, address, balance) VALUES (:firstname, :address, :balance)");
$statement->bindValue(":firstname", $_GET['firstname']);
$statement->bindValue(":address", $_GET['address']);
$statement->bindValue(":balance", 0);
$statement->execute();

header("Location: form_insert.html");
die();
?>