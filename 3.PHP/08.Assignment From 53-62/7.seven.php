<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-18
*/

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$str="";
foreach($chars as $ch){
    if(gettype($ch)=="integer")
        continue;
    $str.=$ch;
}
echo ucfirst(strtolower($str));
// Output
// "Elzero"