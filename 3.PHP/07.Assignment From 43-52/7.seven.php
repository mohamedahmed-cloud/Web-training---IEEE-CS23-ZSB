<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */

    function calculate(int $num_one, int $num_two) : float {
        return $num_one + $num_two;
      }
      
      echo calculate(20, 10); // 30
    echo "<br>";
      echo gettype(calculate(20, 10)); // Double
?>