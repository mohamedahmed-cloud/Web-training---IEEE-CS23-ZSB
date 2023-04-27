<?php 

/*
    Author : Mohamed Yousef 
    Date   : 2023-03-13
*/
$day = "Sat";

switch($day) {
    case "Sat":
    case "Sun":
    case "Mon":
        echo "We Are Open All The Day";
        break;
    case "Tue":
    case "Wed":
        echo "We Are Open From 08:12";
        break;
    case "Thu":
    case "Fri":
        echo "We Are Closed";
        break;
    default:
        echo "Unknown Day";
}
echo "<br>";
if($day==="Sat" or $day==="Sun" or $day=== "Mon"){
    echo "We Are Open All The Day";
}elseif ($day==="Tue" || $day==="Wed") {
    echo "We Are Open From 08:12";
}elseif ($day==="Thu" || $day==="Fri"){
    echo "We Are Closed";
}else {
    echo "Unknown Day";
}