<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-18
*/
$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo str_repeat(str_pad(strtolower($str),4,"_"),3);

// aaa_aaa_aaa_