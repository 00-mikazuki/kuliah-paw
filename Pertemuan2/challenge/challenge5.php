<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1" cellpadding="5" style="text-align: center;">
    <?php $x = 20; ?>
    <?php for($i = 0; $i <= $x; $i++) { ?>
      <tr>
      <?php for($j = 0; $j <= $x; $j++) { ?>
          <?php if($i == 0 && $j == 0) { ?>
            <td></td>
          <?php } else if($i == 0) { ?>
            <td style="background-color: aqua;">
              <?php echo $j; ?>
            </td>
          <?php } else if($j == 0) { ?>
            <td style="background-color: green;">
              <?php echo $i; ?>
            </td>
          <?php } else if($i == $j) { ?>
            <td style="background-color: red;">
              <?php echo $i * $j; ?>
            </td>
          <?php } else { ?>
            <td>
              <?php echo $i * $j; ?>
            </td>
          <?php } ?>
      <?php } ?>
      </tr>
    <?php } ?>
  </table>
</body>
</html>