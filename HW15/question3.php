<h3> Multiple Choice </h3>

<?php
    session_start();
    // if session timed out, terminate quiz 
    if (time() - $_SESSION["user"] > 900){
        header("Location: timedOut.php");
    }
	
	echo "Please answer before proceeding. Unmarked questions will be marked as wrong.";
	echo "<br> <br>";

    
    //record answer from question 2 
    $_SESSION["two"] = $_POST["two"];

    echo $_SESSION["one"];
    echo $_SESSION["two"];
?>


