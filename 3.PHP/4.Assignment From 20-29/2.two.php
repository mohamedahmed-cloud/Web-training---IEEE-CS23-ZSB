<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-09
    */
    $a = "10";
    //1
    echo $a;
    echo "<br>";
    echo gettype(+$a);
    echo "<br>";
    //2
    echo $a;
    echo "<br>";
    echo gettype(+(-$a));
    echo "<br>";
    //3
    echo $a;
    echo "<br>";
    echo gettype(intval($a));
    echo "<br>";
    // 4
    echo $a;
    echo "<br>";
    echo gettype((int)($a));
    echo "<br>";
    //5
    echo $a;
    echo "<br>";
    echo gettype(($a)+0);
    echo "<br>";
    
?>