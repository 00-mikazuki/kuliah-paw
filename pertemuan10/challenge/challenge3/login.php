<?php 
session_start();


function checkPassword($username, $password) {
  $dbc = new PDO("mysql:host=localhost;dbname=customerdb","root","");
  $query = $dbc->prepare(
    "SELECT * 
    FROM admin 
    WHERE username = :username and password = SHA2(:password, 0)"
    );
  $query->bindValue(":username", $username);
  $query->bindValue(":password", $password);
  $query->execute();
  return $query->rowCount() > 0;
}

if(isset($_SESSION['isAdmin'])) {
  header('location: private.php');
  exit();
}

if(isset($_POST["login"])) {
  if(checkPassword($_POST["username"], $_POST["password"])) {
    $_SESSION['isAdmin'] = true;
    header('location: private.php');
    exit();
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <form action="login.php" method="post">
    <div>
      <label for="name">username</label>
      <input type="text" name="username" id="name">
    </div>
    <div>
      <label for="password">password</label>
      <input type="text" name="password" id="password">
    </div>
    <div>
      <button name="login">Login</button>
    </div>
  </form>
</body>
</html>