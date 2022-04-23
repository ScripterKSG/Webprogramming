<h3>Multiple Choice</h3>

<?php
    session_start();
    // if session timed out, terminate quiz 
    if (time() - $_SESSION["user"] > 900){
	    header("Location: timedOut.php");
	    exit();
    }

	echo "Please answer before proceeding. Unanswered questions will be marked as wrong.";
	echo "<br> <br>";

    //record answer from question 3
    	$_SESSION["three"] = $_POST["three"];
?>

<form name="Q4" method="POST" action="question5.php">
    4. This Internet layer is responsible for creating the packets that move across the network.<br/>
    <label> a) Physical <input name = "four[]" type = "checkbox" value = "a4" /> </label> <br>
    <label> b) Data Link <input name = "four[]" type = "checkbox" value = "b4" /> </label><br>
    <label> c) Network <input name = "four[]" type = "checkbox" value = "c4" /> </label><br>
    <label> d) Transport <input name = "four[]" type = "checkbox" value = "d4" /> </label> <br>

    <input type = "submit" value = "Next Question" />
</form>
