<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */

  // Write Function Content Here
    function sum_all(...$alls){
        $ans=0;
        foreach($alls as $all){
            if($all==10) $all=20;
            else if($all==5) continue;
            $ans+=$all;
        }
        return $ans;
    }
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo "<br>";
echo sum_all(5, 10, 5, 10); // 40
?>