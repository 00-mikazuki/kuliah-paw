<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">
    table, tr, td, th {
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <h1>Daftar Buah:</h1>
  <table>
    <tr>
      <th>No.</th>
      <th>Nama Buah</th>
    </tr>
    <?php 
    $i = 1;
    $buah = array('Apel', 'Jeruk', 'Pisang', 'Durian', 'Jambu');
    foreach($buah as $b) { 
    ?>
      <tr>
        <td><?php echo "$i."; ?></td>
        <td><?php echo $b; ?></td>
      </tr>
    <?php $i++; } ?>
  </table>
</body>
</html>