<?php
/*
    Author : Mohamed Yousef 
    Date   : 2023-04-27
*/ 
$num1 = 11.5; // 11
echo round($num1,0,PHP_ROUND_HALF_DOWN). "<br/>";
echo round($num1,0,PHP_ROUND_HALF_ODD) . "<br/>";


$num2 = 9.4898; // 9.5
echo round($num2, 1) . "<br/>";
$num3 = -7.5; // -7
echo round($num3,0, PHP_ROUND_HALF_DOWN);
?>