<?php
/*
    Author : Mohamed Yousef 
    Date   : 2023-04-28
*/

// five way.
echo basename(__FILE__) . "<br>";
echo pathinfo(__FILE__)["basename"] . "<br>";
echo pathinfo(__FILE__)["filename"] .".".  pathinfo(__FILE__)["extension"] . "<br>";
echo basename($_SERVER['PHP_SELF']) . "<br>";
echo basename($_SERVER['SCRIPT_FILENAME']);



// "index.php"
// "index.php"
// "index.php"
// "index.php"