<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-14
    */

    function check_status($a, $b, $c) {
        $newa="";
        $newb="";
        $newc="";
        $x=gettype($a);
        $y=gettype($b);
        $z=gettype($c);
        $arr=[$x=>$a,$y=>$b,$z=>$c];
        // echo "<br>";
        // print_r($arr);
        // echo "<br/>";
        foreach($arr as $num =>$value){
            if($num =="string"){
                $newa=$value;
            }else if($num=="integer"){
                $newb=$value;
                // echo $newb;
            }else if($num=="boolean") {
                $newc=$value;
            }
        }
        if ($newc){
            return "Hello ". $newa. ", Your Age Is ".$newb.  " You Are Available For Hire";
        }else {
          return  "Hello ". $newa. ", Your Age Is ".$newb.  " You Are Not Available For Hire";

        }

}
      
      // Needed Output
      echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
      echo "<br>";
      echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
      echo "<br>";
      echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
      echo "<br>";
      echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
      echo "<br>";
?>