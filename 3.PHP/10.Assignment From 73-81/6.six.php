<?php
/*
    Author : Mohamed Yousef 
    Date   : 2023-04-27
*/ 

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_SANITIZE_URL, FILTER_NULL_ON_FAILURE) . "<br/>";
echo filter_var($url2, FILTER_SANITIZE_URL, FILTER_NULL_ON_FAILURE) . "<br/>";
echo filter_var($url3, FILTER_SANITIZE_URL, FILTER_NULL_ON_FAILURE) . "<br/>";
echo filter_var($url4, FILTER_SANITIZE_URL, FILTER_NULL_ON_FAILURE) . "<br/>";


/*
// Output
http://www.elzero.org
http://elzero.org
https://elzero.org
https://elzero.org
 */