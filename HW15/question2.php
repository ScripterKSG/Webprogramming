<h3>True / False</h3>

<?php
    session_start();
    // if session timed out, terminate quiz 
    if (time() - $_SESSION["user"] > 900){
	    header("Location: timedOut.php");
	    exit();
    }

	echo "Please answer before proceeding. Unanswered questions will be marked as wrong.";
	echo "<br> <br>";

    //record answer from question 1
    	$_SESSION["one"] = $_POST["one"];
?>

<form name="Q2" method="POST" action="question3.php">
	2. An Apple MacBook is an example of a Linux system.
	<label> a) True <input name = "two" type = "radio" value = "a2" /> </label>
	<label> b) False <input name = "two" type = "radio" value = "b2" /> </label> <br><br>

	<input type = "submit" value = "Next Question" />
</form>
