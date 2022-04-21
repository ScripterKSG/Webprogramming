<h3>True / False</h3>

<?php
    session_start();
    $score = 0;
    if (time() - $_SESSION["user"] > 900){
        header("Location: timedOut.php");
    }

    $one = $_POST["one"];

    if(isset($one)){   
        if ($one == "a1") {          
            $score += 1;     
        }
        else{
            echo "incorrect";
        }
    }
    else{

	$_SESSION["notAnswered"] = "notAnswered";
        header("Location: question1.php");
    }

    echo "TESTING GOOD";
?>

