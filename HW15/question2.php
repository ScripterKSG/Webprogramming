<h3>True / False</h3>

<?php
session_start();

    // if session timed out, terminate quiz 
    if (time() - $_SESSION["user"] > 900){
        header("Location: timedOut.php");
    }
	
    //if not answered, displays request to be answered
    if($_SESSION["notAnswered"] == "notAnswered" ){
	    echo "Please answer before proceeding";
	    echo "<br> <br>";
    }
    unset($_SESSION["notAnswered"]);

    //get answer from last question
    $one = $_POST["one"];
	
    // if answered, check if correct and update score session
    if(isset($one)){   
        if ($one == "a1") {          
            $_SESSION["score"] += 1;     
        }
    }
    //if not answered, go back to previous question and request question be answered
    else{
	$_SESSION["notAnswered"] = "notAnswered";
        header("Location: question1.php");
    }

?>

