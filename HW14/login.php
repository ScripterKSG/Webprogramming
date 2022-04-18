<?php

    
error_reporting(E_ALL);
   ini_set("display_errors", "on");
    $name = $_POST["hid"];
    $myFile = "passwd.txt";
    $contents = file($myFile);

    //check if entered info is valid, if so make cookie
    $valid = FALSE;
    foreach($contents as $line) {
	    if (trim($line) == $name){
            setcookie("name", $name, time()+120, "/");
            $valid = TRUE;
            break;
        }
    }

    if ($valid == FALSE){
        echo '<script> alert("Invalid Username or Password"); </script>';
    }

    header("Location: homework14.php");

  

?>
