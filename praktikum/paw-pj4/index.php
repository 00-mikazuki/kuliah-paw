<?php 
function validate(&$errors, $field_list, $field_name, $pattern)
{
	if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
		$errors[$field_name] = 'required';
	else if (!preg_match($pattern, $field_list[$field_name]))
		$errors[$field_name] = 'invalid';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $errors = array();
  $username_pattern = "/^[a-z]+$/";
  $password_pattern = "/^[0-9]{8,}$/";
  $reinput = true;
  if(isset($_POST['submit'])) {
    validate($errors, $_POST, 'username', $username_pattern);
    validate($errors, $_POST, 'password', $password_pattern);
    $errors? $reinput = true : $reinput = false;
  }
  ?>
  <h1>LOGIN</h1>
  <?php if($reinput) { ?>
    <form action="index.php" method="post">
      <label for="username">username</label>
      <input type="text" id="username" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username'])?>">
      <?php if(isset($errors['username'])) echo "<span style=\"color: red;\">username ". $errors['username']."</span>" ?>
      <br>
      <label for="password">password</label>
      <input type="password" id="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password'])?>">
      <?php if(isset($errors['password'])) echo "<span style=\"color: red;\">password ". $errors['password']."</span>" ?>
      <br>
      <br>
      <button type="submit" name="submit">Login</button>
    </form>
  <?php } else { ?>
    <h3>Anda Berhasil Login</h3>
  <?php } ?>

  
</body>
</html>