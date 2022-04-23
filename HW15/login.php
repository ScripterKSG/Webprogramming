<?php    
    error_reporting(E_ALL);
    ini_set("display_errors", "on");
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $myFile = "passwd.txt";
    $contents = file($myFile);
    $myFile2 = "results.txt";
    $contents2 = file($myFile2) or die("HELLO");

    session_start();

    
    //check if entered info is valid, if so make logged in session
    $valid = FALSE;
    $name = $user . ":" . $pass;
    foreach($contents as $line) {
	    if (trim($line) == $name){
	    	$_SESSION["user"] = time();		//keep track of time logged in
	    	$_SESSION["nameForScore"] = $user;  //keep track of username to write to results.txt later
	    	$valid = TRUE;
            	break;
        }
    }
	
    //if login failed, go back to page and display info saying incorrect login
    if ($valid == FALSE){
	    $_SESSION["failed"] = "failed";
	    header("Location: homework15.php");
	    exit();
    }

    else{
    	//if user has taken quiz alrdy, deny them
    	foreach($contents2 as $line){
		$resultName = strtok($line, ":");
		if ($resultName == $user){
			$_SESSION["taken"] = "taken";
			header("Location: homework15.php");
			exit();
		}
	}
	//user has not taken quiz, and login is valid -> take quiz
	 header("Location: question1.php" );
	 exit();
    }



  

?>
