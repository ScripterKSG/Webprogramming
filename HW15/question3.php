<h3> Multiple Choice </h3>

<?php

    // if session timed out, terminate quiz 
    if (time() - $_SESSION["user"] > 900){
        header("Location: timedOut.php");
    }
	
    //if not answered, displays request to be answered
    if($_SESSION["notAnswered"] == "notAnswered3" ){
       	    echo "Please answer before proceeding";
       	    echo "<br> <br>";
    }
    unset($_SESSION["notAnswered"]);

    //get answer from last question
    $two = $_POST["two"];

    if(isset($two)){   
	if ($one == "a2") {          
		$_SESSION["score"] += 1;     
	}
    }
    //if not answered, go back to previous question and request question be answered
    else{
       	$_SESSION["notAnswered"] = "notAnswered2";
    	header("Location: question2.php");
    }
?>


