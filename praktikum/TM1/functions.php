<?php 

function is_pangkat3($bilangan) {
  for($i = 1; $i <= $bilangan; $i++) if(pow($i,3) == $bilangan) return true;
  return false;
}

function tabelPenjumlahan($ukuran, $warna) {
  echo "<table>";
  for($i = 0; $i <= $ukuran; $i++) {
    echo "<tr>";
    for($j = 0; $j <= $ukuran; $j++) {
      if($i == 0 && $j == 0) {
        echo "<th style=\"border: 0; \"></th>";
      } else if($j == 0) {
        echo "<th>$i</th>";
      } else if($i == 0) {
        echo "<th>$j</th>";
      } else {
        echo "<td>" . $i + $j . "</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";

  echo "<table>";
  for($i = 0; $i <= $ukuran; $i++) {
    echo "<tr>";
    for($j = 0; $j <= $ukuran; $j++) {
      if($i == 0 && $j == 0) {
        echo "<th style=\"border: 0; \"></th>";
      } else if($j == 0) {
        echo "<th>$i</th>";
      } else if($i == 0) {
        echo "<th>$j</th>";
      } else if($i % 2 == 1) {
        echo "<td style=\"background-color: $warna;\">" . $i + $j . "</td>";
      } else {
        echo "<td>" . $i + $j . "</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";

  echo "<table>";
  for($i = 0; $i <= $ukuran; $i++) {
    echo "<tr>";
    for($j = 0; $j <= $ukuran; $j++) {
      if($i == 0 && $j == 0) {
        echo "<th style=\"border: 0; \"></th>";
      } else if($j == 0) {
        echo "<th>$i</th>";
      } else if($i == 0) {
        echo "<th>$j</th>";
      } else if(is_pangkat3($j)) {
        echo "<td style=\"background-color: $warna;\">" . $i + $j . "</td>";
      } else {
        echo "<td>" . $i + $j . "</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";

  echo "<table>";
  for($i = 0; $i <= $ukuran; $i++) {
    echo "<tr>";
    for($j = 0; $j <= $ukuran; $j++) {
      if($i == 0 && $j == 0) {
        echo "<th style=\"border: 0; \"></th>";
      } else if($j == 0) {
        echo "<th>$i</th>";
      } else if($i == 0) {
        echo "<th>$j</th>";
      } else if($j <= $i) {
        echo "<td style=\"background-color: $warna;\">" . $i + $j . "</td>";
      } else {
        echo "<td>" . 6 . "</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
}

