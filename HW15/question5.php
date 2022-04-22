<h3>Fill in the Blank</h3>

<?php
    session_start();
    // if session timed out, terminate quiz 
    if (time() - $_SESSION["user"] > 900){
        header("Location: timedOut.php");
    }

	echo "Please answer before proceeding. Unanswered questions will be marked as wrong.";
	echo "<br> <br>";

    //record answer from question 4
    	$_SESSION["four"] = $_POST["four"];
?>

<form name="Q5" method="POST" action="question6.php">
<label> 5) <input name = "five" id="five2" type = "text" size = "30" required/> is a networking protocol that runs over
       TCP/IP, and governs communication between web browsers and web servers.</label><br><br>

       <input type = "submit" value = "Next Question" />
</form>