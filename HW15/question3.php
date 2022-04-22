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
?>

<form name="Q3" method="POST" action="question4.php">
    <label> a) Processing delay at a router <input name = "three[]" type = "checkbox" value = "a3" /> </label> <br>
    <label> b) CPU workload on a client <input name = "three[]" type = "checkbox" value = "b3" /> </label><br>
    <label> c) Transmission delay along a communications link <input name = "three[]" type = "checkbox" value = "c3" /> </label><br>
    <label> d) Propagation delay<input name = "three[]" type = "checkbox" value = "d3" /> </label> <br><br>

    <input type = "submit" value = "Next Question" />
</form>