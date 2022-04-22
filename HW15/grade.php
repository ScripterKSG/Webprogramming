<?php
    $correct = 0;

    //record answer from question 5
    $_SESSION["six"] = $_POST["six"];

    if($_SESSION["one"] == "b1"){$correct = $correct + 1;}

    if($_SESSION["two"] == "a2"){$correct = $correct + 1;}

    $checked = 0;
    $correctBox = 0;
    foreach($_SESSION["three"] as $box){
        $checked = $checked + 1;
        if($box == "b3"){$correctBox = 1;}
    }
    if($checked == 1 and $correctBox == 1){$correct = $correct + 1;}

    $checked = 0;
    $correctBox = 0;
    foreach($_SESSION["four"] as $box){
        $checked = $checked + 1;
        if($box == "c4"){$correctBox = 1;}
    }
    if($checked == 1 and $correctBox == 1){$correct = $correct + 1;}

    $blank5 = strtolower($_SESSION["five"]);
    $blank6 = strtolower($_SESSION["six"]);

    if($blank5 == "http"){$correct = $correct + 1;}

    if($blank6 == "favicon"){$correct = $correct + 1;}

    $score = strval($correct) . " / 6";
    echo '<script> alert("'.$score.'"); </script>';
    echo "You have completed the quiz."
?>
