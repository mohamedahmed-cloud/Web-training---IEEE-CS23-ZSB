<?php 
function hurdleJump($hurdles, $jumpHeight) {
	for($num=0;$num<count($hurdles);$num++){
		if($hurdles[$num]> $jumpHeight){
			return False;
		}
	}
return True;
}
?>