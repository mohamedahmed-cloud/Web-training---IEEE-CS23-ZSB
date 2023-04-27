<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$nums = [10, 100, -20, 50, 30];
function findMin($one,$two){
    if(is_numeric($one) && $one>$two) 
        return $two;
    return $one;
}
// Output
echo array_reduce($nums,"findMin",$nums[0]);

// Output
// -20