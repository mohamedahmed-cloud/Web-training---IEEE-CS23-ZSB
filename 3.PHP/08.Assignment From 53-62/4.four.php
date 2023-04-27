<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-18
*/
$str = "<div><b>Elzero</b></div>";
$str=strip_tags($str,"<b>");
echo $str;
// <b>Elzero</b>    