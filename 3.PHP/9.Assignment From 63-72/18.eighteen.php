<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/

$title = "E&z\$r0 W\$b Sch00&";

// Output
$replace=["&","$","0"];
$newValue=["l","e","o"];
$title=str_replace($replace,$newValue,$title,$count);
echo $title;
echo "<br>";
echo $count;
// "Elzero Web School"
// 7