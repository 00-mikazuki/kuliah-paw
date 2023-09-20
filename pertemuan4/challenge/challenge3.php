<?php 

echo 'WHILE<br>';
$i = 40;

while($i > 0) {
  if($i > 10 && $i < 30)
    echo "<div style=\"color: blue;\">Iteration number $i </div>";
  else
    echo "Iteration number $i <br>";
  $i-=3;
}


echo '<br>DO-WHILE<br>';
$i = 40;

do {
  if($i > 10 && $i < 30)
    echo "<div style=\"color: blue;\">Iteration number $i </div>";

  else
    echo "Iteration number $i <br>";
  $i-=3;
} while ($i > 0);

?>