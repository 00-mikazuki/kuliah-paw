<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TM2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="background-image"></div>
  <div class="form-container">
    <div class="title">
      <img src="img/logo.png" alt="logo">
      <h1>Pendaftaran Akun Perizinan Berusaha Berbasis Risiko</h1>
    </div>
    <form action="index.php" method="post">
      <?php 
      require 'validate.php';
      
      $errors = [];
      if(isset($_POST['submit'])) {
        // jika telah disubmit maka validate

        // validasi nik
        is_numeric_fill($errors, $_POST, 'nik');
        is_n_digits($errors, $_POST, 'nik', 16);
        is_empty_fill($errors, $_POST, 'nik');

        // validasi nama pelaku usaha
        is_alphabet($errors, $_POST, 'nama-pelaku');
        is_empty_fill($errors, $_POST, 'nama-pelaku');

        // validasi jenis pelaku usaha(f)
        is_option_selected($errors, $_POST, 'jenis-usaha');
        
        // validasi notelp
        is_numeric_fill($errors, $_POST, 'notelp');
        is_n_digits($errors, $_POST, 'notelp', "10,13");
        is_empty_fill($errors, $_POST, 'notelp');

        // validasi email
        is_email_format($errors, $_POST, 'email');
        is_empty_fill($errors, $_POST, 'email');

        // validasi nama brand
        is_alphanumeric($errors, $_POST, 'nama-brand');
        is_n_chars($errors, $_POST, 'nama-brand', "2,");
        is_empty_fill($errors, $_POST, 'nama-brand');

        // validasi alamat
        is_address_format($errors, $_POST, 'alamat');
        is_empty_fill($errors, $_POST, 'alamat');

        is_alphabet($errors, $_POST, 'provinsi');
        is_empty_fill($errors, $_POST, 'provinsi');

        is_alphabet($errors, $_POST, 'kabupaten/kota');
        is_empty_fill($errors, $_POST, 'kabupaten/kota');

        is_alphabet($errors, $_POST, 'kecamatan');
        is_empty_fill($errors, $_POST, 'kecamatan');
        
        is_alphabet($errors, $_POST, 'desa/kelurahan');
        is_empty_fill($errors, $_POST, 'desa/kelurahan');

        // validasi password
        is_password_format($errors, $_POST, 'password');
        is_empty_fill($errors, $_POST, 'password');

        is_empty_fill($errors, $_POST, 'password-confirm');
        is_password_match($errors, $_POST, 'password', 'password-confirm');

        // validasi persetujuan
        if(!isset($_POST['persetujuan'])) $errors['persetujuan'] = 'required';

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