<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */

    $help_num = 3;
    $nums = [4, 5, 6, 1, 2, 3];
    $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
    foreach($names as $name){
        if($name=="Sayed" or $name=="Osama"){
            echo $name;
            echo "<br>";
        }
    }

    // Output
    // "Sayed"
    // "Osama"
?>