<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$nums = [11, 2, 10, 7, 20, 50];

// Output
echo array_reduce($nums,fn($carry,$num) => $carry+$num );
// 100