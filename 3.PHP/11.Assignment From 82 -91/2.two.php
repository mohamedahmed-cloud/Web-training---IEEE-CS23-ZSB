<?php
/*
    Author : Mohamed Yousef 
    Date   : 2023-04-28
*/
$filepath = "D:\Design2.mp4";
if (file_exists($filepath))
{
    echo "Size In Megabyte Is " . round(filesize($filepath) / (1024 * 1024)) ."<br>";

    echo "Size In Kilobyte Is " . round(filesize($filepath) / (1024 )) . "<br>";
}
else
{
    echo "Enter a valid path.";
}