<?php

$correct = 0;

$radio1 = $_POST["one"];
$radio2 = $_POST["two"];
$checkboxes3 = $_POST["three"];
$checkboxes4 = $_POST["four"];
$blank5 = $_POST["five"];
$blank6 = $_POST["six"];

if($radio1 == "b1"){$correct = $correct + 1;}

if($radio2 == "a2"){$correct = $correct + 1;}

$checked = 0;
$correctBox = 0;
foreach($checkboxes3 as $box){
	$checked = $checked + 1;
	if($box == "b3"){$correctBox = 1;}
}
if($checked == 1 and $correctBox == 1){$correct = $correct + 1;}

$checked = 0;
$correctBox = 0;
foreach($checkboxes4 as $box){
	$checked = $checked + 1;
	if($box == "c4"){$correctBox = 1;}
}
if($checked == 1 and $correctBox == 1){$correct = $correct + 1;}

$blank5 = strtolower($blank5);
$blank6 = strtolower($blank6);

if($blank5 == "http"){$correct = $correct + 1;}

if($blank6 == "favicon"){$correct = $correct + 1;}

$score = strval($correct) . " / 6";
echo '<script> alert("'.$score.'"); </script>';

?>
