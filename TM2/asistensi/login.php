<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
    if(!isset($_POST['email-hid']) || !isset($_POST['password-hid'])) {
      header('registrasi.php');
    }

    $email = $_POST['email-hid'];
    $password = $_POST['password-hid'];


    $errors = [];
    if(isset($_POST['submit'])) {
      if($_POST['email'] != $email) $error['email'] = 'invalid';
      if($_POST['password'] != $password) $error['password'] = 'invalid';

      if(!$errors) {
        header('registrasi.php');
      } else {
        // jika semua field sudah benar
        echo '
        <script>
          alert("login berhasil");
        </script>
        ';
      }
    }
    ?>

  <form action="login.php" method="post">
      <label for="email">email</label>
      <input type="text" id="email" name="email-log" value="<?php if(isset($_POST['email-log'])) echo htmlspecialchars($_POST['email-log']) ?>">
      <div class="error">
        <?php 
          if(isset($errors['email'])) {
            if($errors['email'] == 'required') echo "mohon isi alamat email";
            elseif($errors['email'] == 'invalid') echo "email salah";
          }
        ?>
      </div>
      <br>
      <label for="password">password</label>
      <input type="text" id="password" name="password-log" value="<?php if(isset($_POST['password-log'])) echo htmlspecialchars($_POST['password-log']) ?>">
      <div class="error">
        <?php 
          if(isset($errors['password'])) {
            if($errors['password'] == 'required') echo "mohon isi password";
            elseif($errors['password'] == 'invalid') echo "password salah";
          }
        ?>
      </div>
      <br>
      <input type="submit" name="submit">

  </form>
</body>
</html>