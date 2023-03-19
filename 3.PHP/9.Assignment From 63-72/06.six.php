<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo "<pre>";
print_r(array_pad($chars,10,"@"));
echo "</pre>";
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )