<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$chars = ["o", "r", "e", "z", "l", "E"];
$charrevese=[];
$str="";
foreach($chars as $ch):
    array_unshift($charrevese,$ch);
endforeach;
foreach($charrevese as $ch):
    $str.=$ch;
endforeach;
echo $str;


// Output
// "Elzero"