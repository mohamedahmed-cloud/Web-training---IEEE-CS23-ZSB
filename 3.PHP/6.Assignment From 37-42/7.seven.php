<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */
    $mix = [1, 2, "A", "B", "C", 3, 4];
    $s=0;
    $num=0;
    for($i=0;$i<count($mix);$i++){
        if(gettype($mix[$i])=="string"){
            $s++;
            continue;
        }
        echo $mix[$i];
        $num++;
        echo "<br>";

    }
    echo $num." Numbers Printed";
    echo "<br>";
    echo $s." Letters Ignored";
    
    // Output
    // 1
    // 2
    // 3
    // 4
    // "4 Numbers Printed"
    // "3 Letters Ignored"
?>