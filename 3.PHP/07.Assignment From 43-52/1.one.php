<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */

   // Write Function Content Here
   function greeting($name,$gender=""){
        if ($gender=="Male") echo "Hello Mr ". $name;
        else if ($gender=="Female") echo "Hello Miss ". $name;
        else echo "Hello ". $name;
        echo "<br>";
        // here for second way we can use func_get_arg(index) func_get_args() func_num_args()
   }

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
?>