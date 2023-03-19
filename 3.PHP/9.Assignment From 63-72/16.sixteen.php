<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

// Output
$new=array_filter($mix,function($num){
    if(gettype($num)=='integer'){
        if($num%2) return $num;
    }
});
sort($new);
echo "<pre>";
print_r($new);
echo "</pre>";

// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )