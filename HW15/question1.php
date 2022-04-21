<h3>True / False</h3>

<?php
    session_start();
    if (time() - $_SESSION["user"] > 900){
        header("Location: timedOut.php");
    }

    //if not answered, displays request to be answered
    if($_SESSION["notAnswered"] == "notAnswered1" ){
	    echo "Please answer before proceeding";
	    echo "<br> <br>";
    }
    unset($_SESSION["notAnswered"]);

?>

<!--Question form for question 1 -->
<form name="myForm" method = "POST" action = "question2.php">
    1. "URL" stands for "Universal Reference Link."
    <label> a) True <input name = "one" type = "radio" value = "a1" /> </label>
    <label> b) False <input name = "one" type = "radio" value = "b1" /> </label> <br> <br>

    <input type = "submit" value = "Next Question" />
</form>
