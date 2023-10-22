<?php require 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h3>Tabel Penjumlahan</h3>
    <form action="index.php" method="post">
      <div>
        <label for="ukuran">Ukuran Tabel</label>
        <input type="number" id="ukuran" name="ukuran" value="<?php if(isset($_POST['ukuran'])) echo $_POST['ukuran'] ?>">
      </div>
      <div>
        <label for="warna">Warna</label>
        <input type="text" id="warna" name="warna" value="<?php if(isset($_POST['warna'])) echo $_POST['warna'] ?>">
      </div>
      <div>
        <button type="submit" name="submit">submit</button>
      </div>
    </form>
  </div>

  <div class="table-container">
    <?php if(isset($_POST['submit'])) tabelPenjumlahan($_POST['ukuran'], $_POST['warna']); ?>
  </div>
</body>
</html>