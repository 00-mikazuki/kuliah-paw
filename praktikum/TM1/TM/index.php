<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body {
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .form-container {
      width: 400px;
      background-color: #555;
      color: white;
      padding: 10px 30px 30px;
      border-radius: 15px;
      margin: 50px;
      text-align: center;
    }
    .form-container h3 {
      margin-bottom: 30px;
    }
    form {
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: center;
    }
    form div {
      width: 100%;
      height: 25px;
      margin: 5px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-radius: 5px;
    }
    form div input {
      width: 230px;
      height: 25px;
      border-radius: 5px;
      outline: none;
      border: none;
      padding: 0 10px;
    }
    form div:nth-child(3) {
      height: 60px;
      justify-content: center;
      align-items: flex-end;
    }
    form div button {
      width: 100px;
      height: 40px;
      border-radius: 5px;
      /* outline: none; */
      border: none;
      background-color: #aaa;
      color: white;
    }
    form div button:hover {
      background-color: #888;
    }
    .table-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }
    table,tr,th,td {
      border: 1px solid black;
      text-align: center;
    }
    table {
      margin: 20px;
    }
    tr,th,td {
      width: 20px;
      height: 20px;
    }
  </style>
</head>
<body>
  <?php require 'function.php' ?>

  <div class="form-container">
    <h3>Tabel Penjumlahan</h3>
    <form action="#" method="post">
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