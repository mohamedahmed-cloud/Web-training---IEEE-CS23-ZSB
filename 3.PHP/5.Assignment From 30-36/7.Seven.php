<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-13
*/
$num_one = 23;
$num_two = 5;
$op = "/";
$ans=0;
switch($op){
    case "+" :
        $ans=$num_one+$num_two;
        break;
    case "-" :
        $ans=$num_one-$num_two;
        break;
    case "*" :
        $ans=$num_one*$num_two;
        break;
    case "/" :
        $ans=$num_one/$num_two;
        break;
    default:
        $ans="please enter a valid Operation";
}
echo $ans;