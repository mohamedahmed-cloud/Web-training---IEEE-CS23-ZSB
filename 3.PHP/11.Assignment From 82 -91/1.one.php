<?php
/*
    Author : Mohamed Yousef 
    Date   : 2023-04-28
*/
echo round(disk_total_space("c:") / (1024 * 1024 * 1024 * 1024), 2) . " Terabyte". "<br>";
echo round(disk_total_space("d:") / (1024 * 1024 * 1024 * 1024), 2) . " Terabyte". "<br>";
// "1.37 Terabyte"
// "0.46 Terabyte"