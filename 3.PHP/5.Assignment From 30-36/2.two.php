<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-12
    */

    $a = 200;
$b = 200;
$c = 100;
    
    if($a>$b){
        echo "A Is Larger Than B";
    }elseif($a>$c){
        echo "A Is Larger Than C";
    }elseif($a<$c && $a<$b){
        echo "A Is Not Larger Than B Or C";
    }
?>