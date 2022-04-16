<?php
    //get entered info and read info from password file
    $name = $_POST["hid"];
    $myFile = "passwd.txt";
    $contents = file($myFile);

    //check if entered info is valid, if so make cookie
    $valid = TRUE;
    foreach($contents as $line) {
        if (trim($line) == $name){
            setcookie("name", $name, time()+120, "/");
            $loggedIn = TRUE;
            $valid = TRUE;
            break;
        }
        else{
            $valid = FALSE;
        }
    }

    if ($valid == FALSE){
        echo '<script> alert("Invalid Username or Password"); </script>';
        $valid = TRUE;
    }

    header("Location: homework14.html");
    die;

?>