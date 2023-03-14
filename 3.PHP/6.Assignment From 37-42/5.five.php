<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */
    $start = 0;
    $mix = [1, 2, 3, "A", "B", "C", 4];
    for(;$start<count($mix);$start++){
        if(gettype($mix[$start])=="string" or !$start){
            continue;
        }
        echo $mix[$start];
        echo "<br>";
    }
    // Output
    // 2
    // 3
    // 4
?>