<?php 

    $name = "elzero";
    $$name = "Web";
    // 1
    echo "${$name}";
    echo "<br>";
    // 2
    echo <<< "here"
    ${$name}
    here;
    echo "<br>";
    // 3
    echo <<< here
    ${$name}
    here;
    echo "<br>";
    //4
    echo $elzero;    
    echo "<br>";
    // 5
    echo $$name;
    echo "<br>";
    // 6
    echo ($$name[0].$$name[1].$$name[2]); //String concation
    echo "<br>";
?>