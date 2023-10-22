<?php 
try {
  $dbc = new PDO("mysql:host=localhost;dbname=customerdb","root","");

  $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $statement = $dbc->prepare("INSERT IN cccustomer (fffirstname, aaaddress, bbbalance) VALUES (:firstname, :address, :balance)");
  $statement->bindValue(":firstname", $_GET['firstname']);
  $statement->bindValue(":address", $_GET['address']);
  $statement->bindValue(":balance", 0);
  $statement->execute();
  
  header("Location: form_insert.html");
  die();

} catch (PDOException $err) {
  echo $err->getMessage();
}
?>