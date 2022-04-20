<h3>True / False</h3>

<?php
    if (time() - $_SESSION['LAST_ACTIVITY'] > 900){
        header("Location: timedOut.php");
    }
?>

<?php
    if(isset($_GET["notAnswered"])){
        echo "Please answer before proceeding";
    }
?>

<form name="myForm" method = "POST" action = "question2.php" onsubmit="return validateForm();" novalidate>
    1. "URL" stands for "Universal Reference Link."
    <label> a) True <input name = "one" type = "radio" value = "a1" /> </label>
    <label> b) False <input name = "one" type = "radio" value = "b1" /> </label> <br> <br>

    <input type = "submit" value = "Next Question" />
</form>