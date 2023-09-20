<?php 
$j = 1;
for ($i = 9; $i > 0; $i--) { 
  if($j % 5 == 0) {
    echo 'Iteration number ' . $j++ . ' = <span style="color: red">' . $i . '</span><br>';
  } else {
    echo 'Iteration number ' . $j++ . ' = ' . $i . '<br>';
  } 
}

// $iter = 10;
// $j = $iter;
// for ($i = 1; $i <= $iter; $i++) { 
//   if($i % 5 == 0) {
//     echo 'Iteration number ' . $i . ' = <span style="color: red">' . $j-- . '</span><br>';
//   } else {
//     echo 'Iteration number ' . $i . ' = ' . $j-- . '<br>';
//   } 
// }

?>