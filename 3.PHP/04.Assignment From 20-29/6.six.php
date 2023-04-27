<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-09
    */
    $a = "Elzero";
    $b = "Web";
    $c = "School";

    // Method One
    $d = "$a $b $c";
    echo $d;
    echo "<br>";
    // Method Two
    $d = "${a} ${b} ${c}";
    echo $d;
    echo "<br>";

    // Method Three
    $d = $a . " ". $b ." " . $c;
    echo $d;
    // Method Four
    $d = "{$a} {$b} {$c}";
    echo "<br>";    
    echo $d; // Elzero Web School
    
        
?>