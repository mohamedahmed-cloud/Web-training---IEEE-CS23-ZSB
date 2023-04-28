<?php
/*
    Author : Mohamed Yousef 
    Date   : 2023-04-28
*/
if (! file_exists("Programming/PHP"))
{
    mkdir("Programming/PHP",0711,true);
}
if (file_exists("Programming/PHP"))
{
    rmdir("Programming/PHP");
    rmdir("Programming");
}
else 
{
    echo "file not exit";
}