<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-15
    */
    $message = "Hello";
    $$message=function($m) use($message){
        return $message." " .$m;    
    };
    echo $Hello("Osama"); // Hello Osama
?>