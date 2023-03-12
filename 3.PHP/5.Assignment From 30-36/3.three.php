<?php 
    /*
        Author : Mohamed Yousef 
        Date   : 2023-03-12
    */
    $admins = ["Osama", "Ahmed", "Sayed"];
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        echo "The Request Method Is Post And Username Is Osama";
        // print("<pre>");
        echo "<br>";
        $username=$_POST["user"];
        for($i=0;$i<3;$i++){
            // echo $admins[$i];
            // echo $username;
            if ($admins[$i]===$username){
                echo "This Username $username Is Admin";
            }
        }

    }


?>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>