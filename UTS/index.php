<?php 

// echo 'Hello', ' ', 'my', 'world';

// $val = 50;
// echo 50 + $val * 50;

// $text1 = 'my';
// $text2 = 'world';
// echo "Hello".'$text1'.$text2;

// $x=1;
// $y=1;
// $val = hitung($x,$y);
// echo $val;

// function hitung($a,$b)
// {
//   for($i=0;$i<=11;$i++) {
//     $b = $i * 10;
//     // $b = $i;
//   }
//   return $a+$b;
// }

$list = array(1,2,3,4,5,6,7,8,9);
foreach($list as $val) {
  if($val%2 != 0) {
    echo $val;
  } else {
    echo $val%2;
  }
}
?>