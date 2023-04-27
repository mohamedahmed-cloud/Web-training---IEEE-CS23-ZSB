<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$nums = [5, 10, 20, 5, 30, 40];
echo "<pre>";
print_r(array_reduce(array_filter($nums,fn($num)=> $num>5) ,fn($carry,$current)=> $carry+$current));
echo "</pre>";
// Output
// 100