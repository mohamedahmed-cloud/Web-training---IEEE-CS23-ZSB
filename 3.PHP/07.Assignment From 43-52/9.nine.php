<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-15
    */
    // Write Function Content Here
    $greet="greet";
    $greet =function($notuse) {
        return "Greetings from function";
    };
    $greet =fn($notuse)=>"Greetings From Arrow function";

echo $greet("Osama"); // Greetings
?>