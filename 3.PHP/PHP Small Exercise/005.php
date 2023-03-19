<?php 
/*
    Author : Mohamed Yousef 
    Date   : 2023-03-19
*/
// ip is from share internet
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ipAddress= $_SERVER["HTTP_CLIENT_IP"];
}
// if ip is from proxy
else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
    $ipAddress=$_SERVER["HTTP_X_FORWARDED_FOR"];
}
// if ip from remote address
else {
    $ipAddress=$_SERVER["REMOTE_ADDR"];
}
echo $ipAddress;