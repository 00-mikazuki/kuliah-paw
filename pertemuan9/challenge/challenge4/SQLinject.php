<?php 
$dbc = new PDO("mysql:host=localhost;dbname=customerdb","root","");

$statement = $dbc->prepare("UPDATE customer SET firstname = :firstname, address = :address WHERE customerID = :customerID");
$statement->bindValue(":firstname", $_GET['firstname']);
$statement->bindValue(":address", $_GET['address']);
$statement->bindValue(":customerID", $_GET['customerID']);
$statement->execute();

header("Location: form_update.html");
die();
?>