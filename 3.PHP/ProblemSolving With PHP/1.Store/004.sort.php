<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
// how to sort 2-d array in php;
function tips_orderBy($arr,$how,$kind){
    $sortedItems=[];
    foreach($arr as $num){
        $key=$num[$how];
        $sortedItems[$key]=$num; 
    }
    if($kind="asc"){
        ksort($sortedItems);
    }else {
        krsort($sortedItems);
    }
    return array_values($sortedItems);
}
echo "<pre>";
print_r(tips_orderBy(
  [
    ['id' => 2, 'name' => 'Tomas'],
    ['id' => 3, 'name' => 'Glory'],
    ['id' => 1, 'name' => 'Rebeca']
  ],
  'id',
  'desc'
)); 
echo "</pre>";