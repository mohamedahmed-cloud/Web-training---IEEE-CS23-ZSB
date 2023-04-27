<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */

    // Write Function Content Here
    function get_arguments(...$alls){
        $ans="";
        foreach($alls as $all):
            $ans.=$all. " ";
        endforeach;
        return $ans;
    }
    
    // Needed Output
    echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
    echo "<br>";
echo get_arguments("I", "Love", "PHP"); // I Love PHP
?>