<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/

// Write a PHP script to display the following strings. Go to the editor
// Sample String :
// 'Tomorrow I \'ll learn PHP global variables.'
// 'This is a bad command : del c:\\*.*'
// Expected Output :


echo nl2br(<<<here
    Tomorrow I 'll learn PHP global variables.\n
    This is a bad command : del c:\*.* 
here);

// Tomorrow I 'll learn PHP global variables.
// This is a bad command : del c:\*.* 