<h3>True / False</h3>

<?php
    session_start();
    // if session timed out, terminate quiz 
    if (time() - $_SESSION["user"] > 900){
        header("Location: timedOut.php");
    }
	
    //if not answered, displays request to be answered
    if($_SESSION["notAnswered"] == "notAnswered2" ){
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
	$_SESSION["notAnswered"] = "notAnswered1";
        header("Location: question1.php");
    }
?>

<form method="POST" action="question3.php">
	2. An Apple MacBook is an example of a Linux system.
	<label> a) True <input name = "two" type = "radio" value = "a2" /> </label>
	<label> b) False <input name = "two" type = "radio" value = "b2" /> </label> <br><br>

	<input type = "submit" value = "Next Question" />
</form>
