<h3>True / False</h3>

<?php
    session_start();
    if (time() - $_SESSION["user"] > 900){
	    header("Location: timedOut.php");
	    exit();
    }

	echo "Please answer before proceeding. Unanswered questions will be marked as wrong.";
	echo "<br> <br>";

?>

<!--Question form for question 1 -->
<form name="Q1" method = "POST" action = "question2.php">
    1. "URL" stands for "Universal Reference Link."
    <label> a) True <input name = "one" type = "radio" value = "a1" /> </label>
    <label> b) False <input name = "one" type = "radio" value = "b1" /> </label> <br> <br>

    <input type = "submit" value = "Next Question" />
</form>
