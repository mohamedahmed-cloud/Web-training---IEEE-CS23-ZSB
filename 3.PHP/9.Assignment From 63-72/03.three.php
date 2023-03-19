<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];
  
  // Output
  echo "<pre>";
  print_r(array_reverse(array_change_key_case(array_flip($friends))));
  echo "</pre>";
//   Array
//   (
//     [as] => Ahmed Samy
//     [mg] => Mahmoud Gamal
//     [om] => Osama Mohamed
//     [ag] => Ahmed Gamal
//   )

