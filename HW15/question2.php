<h3>True / False</h3>

<?php
    $score = 0;
    if (time() - $_SESSION['LAST_ACTIVITY'] > 900){
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
        $notAnswered = "notAnswered";
        header("Location: question1.php? notAnswered = $notAnswered");
    }

    echo "TESTING GOOD";
?>

