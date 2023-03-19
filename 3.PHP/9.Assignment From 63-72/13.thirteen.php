<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$nums = [10, 100, -20, 50, 30];
function findMax($one,$two){
    if($one>$two) 
        return $one;
    return $two;
}
// Output
echo array_reduce($nums,"findMax" ,$nums[0]);
// 100