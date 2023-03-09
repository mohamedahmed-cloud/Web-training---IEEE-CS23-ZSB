<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-09
    */
    // Die make stopprogram executation
    // To see Custom Error 2 and 3  make a comment for code upper
     
   // Code 1
    $a = @$b or die("Custom Error 1");
    echo "<br>";
    // Code 2
    $f = @file("Not_A_File") or die("Custom Error 2");
    echo "<br>";
    // Code 3
    (@include("Not_A_File")) or die("Custom Error 3");

?>