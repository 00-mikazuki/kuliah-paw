<?php 

// function tabelPenjumlahan($ukuran, $warna) {
//   echo "<table>";
//   for($i = 0; $i <= $ukuran; $i++) {
//     echo "<tr>";
//     for($j = 0; $j <= $ukuran; $j++) {
//       if($i == 0 && $j == 0) {
//         echo "<th style=\"border: 0; \"></th>";
//       } else if($j == 0) {
//         echo "<th>$i</th>";
//       } else if($i == 0) {
//         echo "<th>$j</th>";
//       } else {
//         echo "<td>" . $i + $j . "</td>";
//       }
//     }
//     echo "</tr>";
//   }
//   echo "</table>";

//   echo "<table>";
//   for($i = 0; $i <= $ukuran; $i++) {
//     echo "<tr>";
//     for($j = 0; $j <= $ukuran; $j++) {
//       if($i == 0 && $j == 0) {
//         echo "<th style=\"border: 0; \"></th>";
//       } else if($j == 0) {
//         echo "<th>$i</th>";
//       } else if($i == 0) {
//         echo "<th>$j</th>";
//       } else if($i % 2 == 1) {
//         echo "<td style=\"background-color: $warna;\">" . $i + $j . "</td>";
//       } else {
//         echo "<td>" . $i + $j . "</td>";
//       }
//     }
//     echo "</tr>";
//   }
//   echo "</table>";

//   echo "<table>";
//   for($i = 0; $i <= $ukuran; $i++) {
//     echo "<tr>";
//     for($j = 0; $j <= $ukuran; $j++) {
//       if($i == 0 && $j == 0) {
//         echo "<th style=\"border: 0; \"></th>";
//       } else if($j == 0) {
//         echo "<th>$i</th>";
//       } else if($i == 0) {
//         echo "<th>$j</th>";
//       } else if(is_pangkat3($j)) {
//         echo "<td style=\"background-color: $warna;\">" . $i + $j . "</td>";
//       } else {
//         echo "<td>" . $i + $j . "</td>";
//       }
//     }
//     echo "</tr>";
//   }
//   echo "</table>";

//   echo "<table>";
//   for($i = 0; $i <= $ukuran; $i++) {
//     echo "<tr>";
//     for($j = 0; $j <= $ukuran; $j++) {
//       if($i == 0 && $j == 0) {
//         echo "<th style=\"border: 0; \"></th>";
//       } else if($j == 0) {
//         echo "<th>$i</th>";
//       } else if($i == 0) {
//         echo "<th>$j</th>";
//       } else if($j <= $i) {
//         echo "<td style=\"background-color: $warna;\">" . $i + $j . "</td>";
//       } else {
//         echo "<td>" . 6 . "</td>";
//       }
//     }
//     echo "</tr>";
//   }
//   echo "</table>";
// }

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

<?php 
// function is_pangkat3($bilangan) {
//   if($bilangan != 1) {
//     for($i = 2; $i < $bilangan; $i++) {
//       $hasil = 0;
//       while($bilangan % $i == 0) {
//         $bilangan = $bilangan / $i;
//         $hasil++;
//       }
//       if($hasil == 3) return true;
//     }
//     return false;
//   } else return true;
// }
?>