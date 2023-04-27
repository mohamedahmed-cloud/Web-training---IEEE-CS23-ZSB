<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-18
*/
$num_one = -1;
$num_two = 2.5;
$let_one = "o";
$let_two = "z";

$str = "El%er0";
$str[$num_one]=$let_one;
$str[(int)$num_two]=$let_two;

// Write Your Code Here

echo $str; // Elzero