<?php
session_start();
if (isset($_SESSION["loggedIn"])){
    if (isset($_POST["delete"])){
        doDeleteData();
    }
    else{
        doDelete();
    }
}
else {
    header("Location: homework16.php");
 }

 function doDelete(){
    $script = $_SERVER['PHP_SELF'];

    print <<<TOP
      <html>
      <head>
      <title> Database Demo </title>
      </head>
      <body>
      <h3> Delete Student Record </h3>
      <form method = "POST" action = "$script">
        <table>
        <tr>
        <td>ID:</td>
        <td> <input name = "id" type = "text" size = "30" required /> </td>
        </tr>
        </table>
      <p> <input name = "delete" type = "submit" value = "Go" /> </p>
      </form>
      </body>
      </html>
TOP;
    
 }

 function doDeleteData(){

	 // GET DATA
	$id = $_POST["id"];

	//Access database
    $server = "spring-2022.cs.utexas.edu";
    $user   = "cs329e_bulko_jasonn12";
    $pwd    = "Mussel7swap3Rail";
    $dbName = "cs329e_bulko_jasonn12";

	$mysqli = new mysqli ($server, $user, $pwd, $dbName);
	// Issue the query

    $command = "DELETE FROM students WHERE id= $id";
    $result = $mysqli->query($command);

	// Verify the result
	if (!$result) {
   		die("Query failed: $mysqli->error <br>");
	} else {
		echo "Query succeeded <br> <br>";
	}
	echo "<a href = 'actions.php' class='button'>Click here to return to actions page</a> <br><br>";
 }
?>
