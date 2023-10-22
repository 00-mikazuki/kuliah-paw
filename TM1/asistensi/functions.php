<?php 
function is_pangkat3($bilangan) {
  for($i = 1; $i <= $bilangan; $i++) if(pow($i,3) == $bilangan) return true;
  return false;
}
?>

<?php function tabelPenjumlahan($ukuran, $warna) { ?>
  <?php if($ukuran % 2 == 1) $ukuran+=1; ?>
  
  <!-- <table>
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
  </table> -->

  <table>
    <?php for($row = 0; $row <= $ukuran; $row++) { ?>
      <tr>
        <?php for($col = 0; $col <= $ukuran; $col++) { ?>
          <?php if($row == 0 && $col == 0) { ?>
            <th style="border: 0;"></th>
          <?php } else { ?>
            <td><?php echo $row + $col; ?></td>
          <?php } ?>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>


  <!-- <table>
    <?php for($row = 0; $row <= $ukuran; $row++) { ?>
      <tr>
        <?php for($col = 0; $col <= $ukuran; $col++) { ?>
          <?php if($row == 0 && $col == 0) { ?>
            <th style="border: 0; background-color: <?php echo $warna; ?>;"></th>
          <?php } else if($col == 0) { ?>
            <?php if(($row == $ukuran)) { ?>
                <th style="background-color: <?php echo $warna; ?>"><?php echo $row; ?></th>
              <?php } else { ?>
                <th><?php echo $row ?></th>
            <?php } ?>
          <?php } else if($row == 0) { ?>
            <?php if(($col == $ukuran)) { ?>
                <th style="background-color: <?php echo $warna; ?>"><?php echo $col; ?></th>
              <?php } else { ?>
                <th><?php echo $col ?></th>
            <?php } ?>
          <?php } else if($row == $col) { ?>
            <th style="background-color: <?php echo $warna; ?>"><?php echo $row + $col; ?></th>
          <?php } else { ?>
            <?php if(($row + $col == $ukuran)) { ?>
              <th style="background-color: <?php echo $warna; ?>"><?php echo $row + $col ?></th>
              <?php } else { ?>
                <th><?php echo $row + $col ?></th>
            <?php } ?>
          <?php } ?>
        <?php } ?>
      </tr>
    <?php } ?>
  </table> -->

  <table>
    <?php for($row = 0; $row <= $ukuran; $row++) { ?>
      <tr>
        <?php for($col = 0; $col <= $ukuran; $col++) { ?>
          <?php if($row == 0 && $col == 0) { ?>
            <th style="border: 0; background-color: <?php echo $warna; ?>;"></th>
          <?php } else if($row == $col) { ?>
            <th style="background-color: <?php echo $warna; ?>"><?php echo $row + $col; ?></th>
          <?php } else { ?>
            <?php if(($row + $col == $ukuran)) { ?>
              <th style="background-color: <?php echo $warna; ?>"><?php echo $row + $col ?></th>
            <?php } else { ?>
              <th><?php echo $row + $col ?></th>
            <?php } ?>
          <?php } ?>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>

  <?php $mid = $ukuran/2; ?>
  <?php $mid1 = $mid; ?>
  <?php $mid2 = $mid; ?>
  <table>
    <?php for($row = 0; $row <= $ukuran; $row++) { ?>
      <tr>
        <?php for($col = 0; $col <= $ukuran; $col++) { ?>
          <?php if($row == 0 && $col == 0) { ?>
            <th style="border: 0;"></th>
          <?php } else if($col == $mid1) { ?>
            <th style="background-color: <?php echo $warna; ?>"><?php echo $row + $col; ?></th>
          <?php } else if($col == $mid2) { ?>
            <th style="background-color: <?php echo $warna; ?>"><?php echo $row + $col; ?></th>
          <?php } else { ?>
            <th><?php echo $row + $col; ?></th>
          <?php } ?>
        <?php } ?>
        <?php 
        if($row < $mid) {
          $mid1+=1;
          $mid2-=1;
        } else {
          $mid1-=1;
          $mid2+=1;
        }
        ?>
      </tr>
    <?php } ?>
  </table>

  <table>
    <?php $j = 1; ?>
    <?php for($row = 0; $row <= $ukuran; $row++) { ?>
      <?php $i = 1; ?>
      <tr>
      <?php for($col = 0; $col <= $ukuran; $col++) { ?>
          <?php if($row == 0 && $col == 0) { ?>
            <th style="border: 0; background-color: <?php echo $warna; ?>;"></th>
          <?php } else if($col == 0) { ?>
            <?php if(($row == $ukuran)) { ?>
                <th style="background-color: <?php echo $warna;?>; border: 0;"></th>
              <?php } else { ?>
                <th><?php echo $j ?></th>
                <?php $j++ ?>
            <?php } ?>
          <?php } else if($row == 0) { ?>
            <?php if(($col == $ukuran)) { ?>
                <th style="background-color: <?php echo $warna;?>; border: 0;"></th>
              <?php } else { ?>
                <th><?php echo $col ?></th>
            <?php } ?>
          <?php } else if($row == $col) { ?>
            <th style="background-color: <?php echo $warna; ?>; border: 0;"></th>
            <?php $i = 1; ?>
          <?php } else { ?>
            <?php if(($row + $col == $ukuran)) { ?>
              <th style="background-color: <?php echo $warna; ?>; border: 0;"></th>
              <?php } else { ?>
                <th><?php echo $i ?></th>
            <?php } ?>
            <?php $i++; ?>
          <?php } ?>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>

<?php } ?>
