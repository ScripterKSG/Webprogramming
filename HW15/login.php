<?php    
    error_reporting(E_ALL);
    ini_set("display_errors", "on");
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $myFile = "passwd.txt";
    $contents = file($myFile);

    //check if entered info is valid, if so make cookie
    $valid = FALSE;
    $name = $user . ":" . $pass;
    foreach($contents as $line) {
	    if (trim($line) == $name){
            session_start();
            $_SESSION[$user] = time();
            $valid = TRUE;
            break;
        }
    }

    if ($valid == FALSE){
        $invalid = "invalid";
        header("Location: homework15.php?  invalid = $invalid" );
    }

    else{
        header("Location: question1.php" );
    }



  

?>