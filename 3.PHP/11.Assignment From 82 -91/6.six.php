<?php
/*
    Author : Mohamed Yousef 
    Date   : 2023-04-28
*/

$handle = fopen("elzero.txt", "r");
echo fread($handle, 25) . "<br>";
rewind($handle);

echo fgets($handle) . " ";
echo fgets($handle) . "<br>";
rewind($handle);

echo file_get_contents("elzero.txt", true,NULL, 0, 25). "<br>";

$i = 0;
while ($i < 2)
{
    echo fgets($handle);
    $i++;
}

fclose($handle);