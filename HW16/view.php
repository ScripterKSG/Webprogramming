<?php
session_start();
if (isset($_SESSION["loggedIn"])){
    if (isset($_POST["View"])){
        doViewData();
    }
    else{
        doView();
    }
}
else {
    header("Location: homework16.php");
 }

 function doView(){
    $script = $_SERVER['PHP_SELF'];

    print <<<TOP
      <html>
      <head>
      <title> Database Demo </title>
      </head>
      <body>
      <h3> View Student Record </h3>
      <form method = "POST" action = "$script">
        <table>
        <tr>
        <td>ID:</td>
        <td> <input name = "id" type = "text" size = "30" required /> </td>
        </tr>
        <tr>
        <td>LAST:</td>
        <td> <input name = "last" type = "text" size = "30" required /> </td>
        </tr>
        <tr>
        <td>FIRST:</td>
        <td> <input name = "first" type = "text" size = "30" required /> </td>
        </tr>
        </table>
      <p> <input name = "View" type = "submit" value = "Go" /> </p>
      </form>


      <form action="viewAll.php" method="post">
            <input type="submit" value="View All Student Records"/>
      </form>
      </body>
      </html>
TOP;

    
 }

 function doViewData(){
	 // GET DATA
	$id = $_POST["id"];
	$last = $_POST["last"];
	$first = $_POST["first"];

	//Access database
    $server = "spring-2022.cs.utexas.edu";
    $user   = "cs329e_bulko_jasonn12";
    $pwd    = "Mussel7swap3Rail";
    $dbName = "cs329e_bulko_jasonn12";

	$mysqli = new mysqli ($server, $user, $pwd, $dbName);
	// Issue the query

    $command = "SELECT * FROM students WHERE id= $id, LAST = '$last', FIRST = '$first";
    $result = $mysqli->query($command);
    echo $result;
	// Verify the result
	if (!$result) {
   		die("Query failed: $mysqli->error <br>");
	} else {
		echo "Query succeeded <br> <br>";
	}
	echo "<a href = 'actions.php' class='button'>Click here to return to actions page</a> <br><br>";
 }
?>
