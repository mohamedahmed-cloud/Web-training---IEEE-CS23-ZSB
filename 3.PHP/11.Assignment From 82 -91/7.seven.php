<?php
/*
    Author : Mohamed Yousef 
    Date   : 2023-04-28
*/

$handle = fopen("elzero.txt", "w");

fwrite($handle, "Hello Elzero Web\r\nSchool");
fclose($handle);