<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$chars = ["A", "B", "C"];

// Output
array_push($chars,"D");
echo "<pre>";
print_r($chars);
echo "</pre>";
array_pop($chars);


// two

$chars[]="D";
echo "<pre>";
print_r($chars);
echo "</pre>";
array_pop($chars);


// Three
$chars=array_pad($chars,4,"D");
echo "<pre>";
print_r($chars);
echo "</pre>";
array_pop($chars);

// Fourth
$chars=array_reverse($chars);
array_unshift($chars,"D");
$chars=array_reverse($chars);
echo "<pre>";
print_r($chars);
echo "</pre>";
array_pop($chars);


// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )    