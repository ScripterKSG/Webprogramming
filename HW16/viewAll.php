<?php
session_start();
if (!isset($_SESSION["loggedIn"])){
    header("Location: homework16.php");
}

$server = "spring-2022.cs.utexas.edu";
$user   = "cs329e_bulko_jasonn12";
$pwd    = "Mussel7swap3Rail";
$dbName = "cs329e_bulko_jasonn12";

$mysqli = new mysqli ($server, $user, $pwd, $dbName);
// Issue the query

$command = "SELECT * FROM students";
$result = $mysqli->query($command);
echo $result;
// Verify the result
if (!$result) {
       die("Query failed: $mysqli->error <br>");
} else {
    echo "Query succeeded <br> <br>";
}
echo "<a href = 'actions.php' class='button'>Click here to return to actions page</a> <br><br>";
?>