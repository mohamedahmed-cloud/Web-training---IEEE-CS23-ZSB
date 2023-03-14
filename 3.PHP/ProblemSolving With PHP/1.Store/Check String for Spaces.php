<?php 
    function hasSpaces($str) {
        $arr=str_split($str);
        $check=0;
        foreach($arr as $str){
                if ($str === " "){
                        return true;
                }
            }
            return False;
    }
?>
