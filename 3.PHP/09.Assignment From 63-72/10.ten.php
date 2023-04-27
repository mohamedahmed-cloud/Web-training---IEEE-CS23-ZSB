<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here
$mix=array_map(fn($num) => $num+1,array_keys($mix));
echo "<pre>";
print_r($mix);
echo "</pre>";
// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )