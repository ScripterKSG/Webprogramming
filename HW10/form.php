<?php

error_reporting(E_ALL);
ini_set("display_errors", "on");


$radio1 = $_POST["1"]
$radio1 = $_POST["2"]
$checkboxes3 = $_POST["3[]"];
$checkboxes4 = $_POST["3[]"];
$blank5 = $_POST["5"];
$blank6 = $_POST["6"];

if (!isset($checkboxes)){
    echo "None selected" . "<br>";
} else{
    foreach ($checkboxes as $box){
        echo $box . "<br>";
    }
}
?>