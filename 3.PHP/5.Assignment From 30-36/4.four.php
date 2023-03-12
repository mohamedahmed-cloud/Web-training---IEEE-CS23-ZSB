<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-13
*/
$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

  echo "A + B = C";

} elseif ($a + $c === $b) {

  echo "A + C = B";

} elseif ($b + $c === $a) {

  echo "B + C = A";

} else {

  echo "The End";

}
echo "<br>";
echo ($a + $b === $c) ?  "A + B = C" :
(($a + $c === $b) ? "A + C = B":
    (($b + $c === $a) ? "B + C = A":
    "The End"
    ));
// OR
echo "<br>";
echo ($a + $b === $c) ?  "A + B = C" :  (($a + $c === $b) ? "A + C = B":(($b + $c === $a) ? "B + C = A":"The End"));
// Output
// "B + C = A"
