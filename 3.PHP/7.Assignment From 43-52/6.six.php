<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */

    // Write Function Content Here
    function calculate($num1,$num2,$operation="add"){
        if ($operation=="subtract" || $operation=="s") return $num1-$num2;
        else if($operation=="add" || $operation=="a") return $num1+$num2;
        else if($operation=="multiply" || $operation=="m") return $num1*$num2;
        else return "Not Valid operation";
    }

// Needed Output
echo calculate(10, 20); // 30
echo "<br>";
echo calculate(10, 20, "a"); // 30
echo "<br>";
echo calculate(10, 20, "s"); // -10
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";
echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo calculate(10, 20, "m"); // 200
echo "<br>";
?>