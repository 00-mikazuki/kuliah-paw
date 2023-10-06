<?php 
function is_pangkat3($bilangan) {
  for($i = 1; $i <= $bilangan; $i++) if(pow($i,3) == $bilangan) return true;
  return false;
}
?>

<?php function tabelPenjumlahan($ukuran, $warna) { ?>
  
  <table>
    <?php for($row = 0; $row <= $ukuran; $row++) { ?>
      <tr>
        <?php for($col = 0; $col <= $ukuran; $col++) { ?>
          <?php if($row == 0 && $col == 0) { ?>
            <th style="border: 0;"></th>
          <?php } else if($col == 0) { ?>
            <th><?php echo $row; ?></th>
          <?php } else if($row == 0) { ?>
            <th><?php echo $col; ?></th>
          <?php } else { ?>
            <td><?php echo $row + $col; ?></td>
          <?php } ?>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>

  <table>
    <?php for($row = 0; $row <= $ukuran; $row++) { ?>
      <tr>
        <?php for($col = 0; $col <= $ukuran; $col++) { ?>
          <?php if($row == 0 && $col == 0) { ?>
            <th style="border: 0;"></th>
          <?php } else if($col == 0) { ?>
            <th><?php echo $row; ?></th>
          <?php } else if($row == 0) { ?>
            <th><?php echo $col; ?></th>
          <?php } else if($row % 2 == 1) { ?>
            <td style="background-color: <?php echo $warna; ?>"><?php echo $row + $col; ?></td>
          <?php } else { ?>
            <td><?php echo $row + $col; ?></td>
          <?php } ?>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>

  <table>
    <?php for($row = 0; $row <= $ukuran; $row++) { ?>
      <tr>
        <?php for($col = 0; $col <= $ukuran; $col++) { ?>
          <?php if($row == 0 && $col == 0) { ?>
            <th style="border: 0;"></th>
          <?php } else if($col == 0) { ?>
            <th><?php echo $row; ?></th>
          <?php } else if($row == 0) { ?>
            <th><?php echo $col; ?></th>
          <?php } else if(is_pangkat3($col)) { ?>
            <td style="background-color: <?php echo $warna; ?>"><?php echo $row + $col; ?></td>
          <?php } else { ?>
            <td><?php echo $row + $col; ?></td>
          <?php } ?>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>

  <table>
    <?php for($row = 0; $row <= $ukuran; $row++) { ?>
      <tr>
        <?php for($col = 0; $col <= $ukuran; $col++) { ?>
          <?php if($row == 0 && $col == 0) { ?>
            <th style="border: 0;"></th>
          <?php } else if($col == 0) { ?>
            <th><?php echo $row; ?></th>
          <?php } else if($row == 0) { ?>
            <th><?php echo $col; ?></th>
          <?php } else if($col <= $row) { ?>
            <td style="background-color: <?php echo $warna; ?>"><?php echo $row + $col; ?></td>
          <?php } else { ?>
            <td><?php echo 6; ?></td>
          <?php } ?>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>

<?php } ?>
