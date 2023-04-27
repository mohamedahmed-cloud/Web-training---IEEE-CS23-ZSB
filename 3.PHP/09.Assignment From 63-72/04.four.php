<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$nums = [10, 20, 30];

// Output
echo "<pre>";
print_r(array_reduce($nums,fn($carry,$num) => $carry+$num));
echo "</pre>";
echo array_sum($nums);
// 60
// 60