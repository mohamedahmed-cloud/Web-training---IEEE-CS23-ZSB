<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
$nums = [1, 2, 3, 4, 5, 6];

// Output
// Every Time The Array Elements Will Be Shuffled
$visited=[];
$keys=[];
while (count($visited)<count($nums)){
    $index=array_rand($nums);
    $index=(int)$index;
    // echo in_array($index,$keys);
    if(!(in_array($index,$keys))){
        // echo "yousef";
        array_push($visited,$nums[$index]);
        array_push($keys,$index);
    }
    
}

echo "<pre>";
print_r($visited);
echo "</pre>";




// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )