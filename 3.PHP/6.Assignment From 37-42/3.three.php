<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */
    $num = 2;
    $ans=1;
    while ($num < 520) {
        echo $ans;
        $ans=$ans*2+2;
        $num=$ans;
        echo "<br>";
    }
    
    // Needed Output
    // 1
    // 4
    // 10
    // 22
    // 46
    // 94
    // 190
    // 382
?>