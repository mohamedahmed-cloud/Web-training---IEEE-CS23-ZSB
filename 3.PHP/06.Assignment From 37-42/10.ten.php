<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */

    $help_num = 4;
    $nums = [2, 4, 5, 6, 10];
    foreach($nums as $value){
        echo  $value ."+" .$nums[$help_num] ."=" .($value + $nums[$help_num--] );
        echo "<br>";


    }
    // Output
    // "2 + 10 = 12"
    // "4 + 6 = 10"
    // "5 + 5 = 10"
    // "6 + 4 = 10"
    // "10 + 2 = 12"
?>