<h3>Fill in the Blank</h3>

<?php
    session_start();
    // if session timed out, terminate quiz 
    if (time() - $_SESSION["user"] > 900){
        header("Location: timedOut.php");
    }

	echo "Please answer before proceeding. Unanswered questions will be marked as wrong.";
	echo "<br> <br>";

    //record answer from question 5
    	$_SESSION["five"] = $_POST["five"];
?>

<form name="Q6" method="POST" action="grade.php">
    <label> 6) A small icon displayed in a browser table that identifies
        a website is called a <input name = "six" id="six2" type = "text" size = "30" /> </label>
         <br><br>
    <input type = "submit" value = "Next Question" />
</form>