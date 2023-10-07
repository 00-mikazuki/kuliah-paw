<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TM2</title>
</head>
<body>
  <div class="form-container">
    <h1>Formulir Pengajuan Dana Bantuan</h1>
    <form action="index.php" method="post">
      <?php 
      require 'validate.php';
      
      $errors = [];
      if(isset($_POST['submit'])) {
        // jika telah disubmit maka validate

        if($errors) {
          // jika ada field yg error
          include 'form.php';
        } else {
          // jika semua field sudah benar
          include 'success.php';
        }
      } else 
        // jika belum disubmit
        include 'form.php';
      ?>
    </form>
  </div>
</body>
</html>