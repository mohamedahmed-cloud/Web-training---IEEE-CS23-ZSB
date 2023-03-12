<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-13
*/
$name = "Osama";
$age = 40;
$country = "Egypt";
// use && and and
if ($age > 18 && gettype($name) === "string" and $country === "Egypt") {
  echo "The Age Is Good To Go<br>";

  //   if () {
      echo "The Name Is Good To Go<br>";
    
      // if () {
          echo "The Country Is Good To Go<br>";

    //   }}

}

// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"