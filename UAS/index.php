<?php 

$dbc = new PDO("mysql:dbname=enterprise;host=localhost", 'root', '');

function fetch($query) {
  global $dbc;
  $stmt = $dbc->prepare($query);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $data;
}

function validasi(&$errors, $field_list, $field_name) {
  if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
		$errors[$field_name] = 'required';
	else if ($field_list[$field_name] != (int)$field_list[$field_name] || $field_list[$field_name] <= 0)
		$errors[$field_name] = 'invalid';
}

$errors = [];

if (isset($_POST['submit'])) {
  validasi($errors, $_POST, 'minimal');
  validasi($errors, $_POST, 'maksimal');

  if($_POST['minimal'] > $_POST['maksimal']) {
    $errors['all'] = 'tahun minimal harus kurang dari atau sama dengan tahun maksimal';
  }

  if(!$errors) {
    $data = fetch(
      "SELECT namaKaryawan, tahunMasuk, namaDepartemen
      FROM karyawan k JOIN departemen d ON k.departemenKaryawan = d.id
      WHERE tahunMasuk BETWEEN {$_POST['minimal']} AND {$_POST['maksimal']}
      ORDER BY tahunMasuk DESC
    ");
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    table, tr, td, th {
      border: 1px solid black;
    }
    span {
      color: red;
    }
  </style>
</head>
<body>
  

  <form method="post">
    <label for="minimal">Tahun Masuk Minimal</label>
    <input type="text" name="minimal" id="minimal" value="<?php if(isset($_POST['minimal'])) echo $_POST['minimal'] ?>" >
    <span><?php if (isset($errors['minimal'])) echo $errors['minimal'] ?></span>
    <br><br>
    <label for="maksimal">Tahun Masuk Maksimal</label>
    <input type="text" name="maksimal" id="maksimal" value="<?php if(isset($_POST['maksimal'])) echo $_POST['maksimal'] ?>" >
    <span><?php if (isset($errors['maksimal'])) echo $errors['maksimal'] ?></span>
    <br>
    <span><?php if (isset($errors['all'])) echo $errors['all'] ?></span>
    <br><br>
    <input type="submit" name="submit">
  </form>

  <br><br>

  <?php if(isset($data)): ?>
    <table>
      <tr>
        <th>namaKaryawan</th>
        <th>tahunMasuk</th>
        <th>namaDepartemen</th>
      </tr>
      <?php foreach($data as $d): ?>
        <tr>
          <td><?= $d['namaKaryawan'] ?></td>
          <td><?= $d['tahunMasuk'] ?></td>
          <td><?= $d['namaDepartemen'] ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif ?>

</body>
</html>