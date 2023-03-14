<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */
    $start = 10;
    $end = 0;
    $stop = 3;
    $store=$start;
    for(;;):
        if($start<$stop)
            break;
        if($store>$start)
            echo "0".$start;
        else
            echo $start;
        $start--;
        echo "<br>";
    endfor;

    // Needed Output    

// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03
?>