<?php 
$i = 30;
$j = 1;

while($i > 0) 
  if($j % 3 == 0)
    echo '<span style="color: blue;">Iteration number ' . $j++ . ': ' . $i-- . '</span><br>';
  else
    echo 'Iteration number ' . $j++ . ': ' . $i-- . '<br>';
  
  // $i--;
  // $j++;
// }

// do {
//   echo "Iteration number $i <br>";
//   $i--;
// } while ($i > 0);

?>