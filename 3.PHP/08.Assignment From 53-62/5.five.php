<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-18
*/

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
echo substr_count($str,$e,$four);
echo "<br>";
echo substr_count(strtoupper($str),$o,-$four);
// 1
// 2