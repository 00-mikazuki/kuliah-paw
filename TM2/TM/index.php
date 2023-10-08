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
    <h1>Formulir Pengajuan Dana Bantuan</h1>
    <form action="index.php" method="post">
      <?php 
      require 'validate.php';
      
      $errors = [];
      if(isset($_POST['submit'])) {
        // jika telah disubmit maka validate

        // validasi nama lengkap
        is_alphabet($errors, $_POST, 'nama');
        is_empty_fill($errors, $_POST, 'nama');

        // validasi nik
        is_numeric_fill($errors, $_POST, 'nik');
        is_n_digits($errors, $_POST, 'nik', 16);
        is_empty_fill($errors, $_POST, 'nik');
        
        // validasi notelp
        is_numeric_fill($errors, $_POST, 'notelp');
        is_n_digits($errors, $_POST, 'notelp', "10,13");
        is_empty_fill($errors, $_POST, 'notelp');

        // validasi email
        is_email_format($errors, $_POST, 'email');
        is_empty_fill($errors, $_POST, 'email');

        // validasi alamat
        is_address_format($errors, $_POST, 'alamat');
        is_empty_fill($errors, $_POST, 'alamat');

        // validasi status rumah
        is_option_selected($errors, $_POST, 'status_rumah');

        // validasi pekerjaan
        is_alphabet($errors, $_POST, 'pekerjaan');
        is_empty_fill($errors, $_POST, 'pekerjaan');
        
        // validasi instansi pekerjaan/usaha
        is_alphanumeric($errors, $_POST, 'usaha');
        is_empty_fill($errors, $_POST, 'usaha');

        // validasi pendidikan terakhir
        is_option_selected($errors, $_POST, 'pendidikan');
        
        // validasi status pernikahan
        is_option_selected($errors, $_POST, 'pernikahan');
        
        // validasi status pernikahan
        is_numeric_fill($errors, $_POST, 'jumlah_anak');
        is_empty_fill($errors, $_POST, 'jumlah_anak');

        // validasi pendapatan
        // suami
        is_numeric_fill($errors, $_POST, 'suami');
        is_empty_fill($errors, $_POST, 'suami');
        // istri
        is_numeric_fill($errors, $_POST, 'istri');
        is_empty_fill($errors, $_POST, 'istri');
        // lainlain
        is_numeric_fill($errors, $_POST, 'lainlain_pendapatan');
        is_empty_fill($errors, $_POST, 'lainlain_pendapatan');
        // total
        is_numeric_fill($errors, $_POST, 'total_pendapatan');
        is_empty_fill($errors, $_POST, 'total_pendapatan');

        // validasi pengeluaran
        // konsumsi_keluarga
        is_numeric_fill($errors, $_POST, 'konsumsi_keluarga');
        is_empty_fill($errors, $_POST, 'konsumsi_keluarga');
        // biaya_pendidikan
        is_numeric_fill($errors, $_POST, 'biaya_pendidikan');
        is_empty_fill($errors, $_POST, 'biaya_pendidikan');
        // biaya_kesehatan
        is_numeric_fill($errors, $_POST, 'biaya_kesehatan');
        is_empty_fill($errors, $_POST, 'biaya_kesehatan');
        // listrik_pulsa
        is_numeric_fill($errors, $_POST, 'listrik_pulsa');
        is_empty_fill($errors, $_POST, 'listrik_pulsa');
        // angsuran
        is_numeric_fill($errors, $_POST, 'angsuran');
        is_empty_fill($errors, $_POST, 'angsuran');
        // lain-lain
        is_numeric_fill($errors, $_POST, 'lainlain_pengeluaran');
        is_empty_fill($errors, $_POST, 'lainlain_pengeluaran');
        // total
        is_numeric_fill($errors, $_POST, 'total_pengeluaran');
        is_empty_fill($errors, $_POST, 'total_pengeluaran');

        // validasi permasalahan
        is_empty_fill($errors, $_POST, 'permasalahan');

        // validasi persetujuan
        if(!isset($_POST['persetujuan'])) $errors['persetujuan'] = 'required';
        // is_checked_checkbox($errors, $_POST, 'persetujuan');


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