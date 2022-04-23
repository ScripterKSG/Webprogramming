<?php
session_start();
$_SESSION["timedOut"] == "timedOut";
header("Location:grade.php");
exit();
?>
