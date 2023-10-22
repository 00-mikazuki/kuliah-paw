<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    require 'validate.php';

    $errors = [];
    if(isset($_POST['submit'])) {
      validate_email($errors, $_POST, 'email');
      is_empty_fill($errors, $_POST,'email');

      validate_password($errors, $_POST, 'password');
      is_empty_fill($errors, $_POST,'password');

      if(!$errors) {
        header('login.php');
      }
    }
    ?>

  <form action="login.php" method="post">
    <label for="email">email</label>
    <input type="text" id="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>">
    <input type="hidden" name="email-hid" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>">
    <div class="error">
      <?php 
        if(isset($errors['email'])) {
          if($errors['email'] == 'required') echo "mohon isi alamat email";
          elseif($errors['email'] == 'invalid') echo "isi email dengan format yang benar";
        }
      ?>
    </div>
    <br>
    <label for="password">password</label>
    <input type="text" id="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']) ?>">
    <input type="hidden" name="password-hid" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']) ?>">
    <div class="error">
      <?php 
        if(isset($errors['password'])) {
          if($errors['password'] == 'required') echo "mohon isi password";
          elseif($errors['password'] == 'invalid') echo "isi password dengan format yang benar";
        }
      ?>
    </div>
    <br>
    <input type="submit" name="submit">

  </form>
</body>
</html>