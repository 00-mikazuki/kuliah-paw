<?php 
$angka = 100.1;
echo 'Nilai angka: <b>' . $angka . '</b><br>';

$huruf;
if($angka > 80 && $angka <= 100) {
  $huruf = 'A';
} elseif($angka >= 75 && $angka < 80) {
  $huruf = 'B+';
} elseif($angka >= 70 && $angka < 75) {
  $huruf = 'B';
} elseif($angka >= 60 && $angka < 70) {
  $huruf = 'C+';
} elseif($angka >= 55 && $angka < 60) {
  $huruf = 'C';
} elseif($angka >= 50 && $angka < 55) {
  $huruf = 'D+';
} elseif($angka >= 45 && $angka < 50) {
  $huruf = 'D';
} elseif($angka >= 30 && $angka < 45) {
  $huruf = 'E+';
} elseif($angka >= 0 && $angka < 30) {
  $huruf = 'E';
} else {
  $huruf = 'salah';
}

if($angka >= 55 && $angka <= 100) {
  echo 'Nilai huruf: <span style="color: green; font-weight: bold">' . $huruf . '</span><br>';
} else {
  echo "Nilai huruf: <span style=\"color: red; font-weight: bold\">$huruf</span><br>";
}

?>