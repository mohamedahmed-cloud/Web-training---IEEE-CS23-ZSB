<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */

 // Write Function Content Here
    function multiply(...$nums){
        $ans=1;
        foreach($nums as $num){
            if(gettype($num)==="string") continue;
            $ans*=(int)$num;
        }
        return $ans;
    }
// Needed Output
echo multiply(10, 20); // 200
echo "<br>";
echo multiply("A", 10, 30); // 300
echo "<br>";
echo multiply(100.5, 10, "B"); // 1000
?>