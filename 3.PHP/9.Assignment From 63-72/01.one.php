<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
    $friends = [
        "AG" => "Ahmed Gamal",
        "OM" => "Osama Mohamed",
        "MG" => "Mahmoud Gamal",
        "AS" => "Ahmed Samy",
        "FA" => "Farid Ahmed",
        "SM" => "Sayed Mohamed"
      ];
      
      // Output
      echo '<pre>';
      print_r(array_chunk($friends,2,true));
      echo '</pre>';
    //   Array
    //   (
    //     [0] => Array
    //       (
    //         [ag] => Ahmed Gamal
    //         [om] => Osama Mohamed
    //       )
    //     [1] => Array
    //       (
    //         [mg] => Mahmoud Gamal
    //         [as] => Ahmed Samy
    //       )
    //     [2] => Array
    //       (
    //         [fa] => Farid Ahmed
    //         [sm] => Sayed Mohamed
    //       )
    //   )


?>