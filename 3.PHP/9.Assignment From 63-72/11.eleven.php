<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$arr = ["A", "B", "C", "D", "E"];

// Output
echo "<pre>";
echo array_reduce($arr,fn($carr,$num) => $carr+1);
echo "</pre>";
// 5