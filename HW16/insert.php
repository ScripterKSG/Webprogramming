<?php
session_start();
if (isset($_SESSION["loggedIn"])){
    if (isset($_POST["insert"])){
        doInsertData();
    }
    else{
        doInsert();
    }
}
else {
    header("Location: homework16.php");
 }

 function doInsert(){
    $script = $_SERVER['PHP_SELF'];

    print <<<TOP
      <html>
      <head>
      <title> Database Demo </title>
      </head>
      <body>
      <h3> Insert Student Record </h3>
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

        <tr>
        <td>MAJOR:</td>
        <td> <input name = "major" type = "text" size = "30" required /> </td>
        </tr>

        <tr>
        <td>GPA:</td>
        <td> <input name = "gpa" type = "text" size = "30" required /> </td>
        </tr>

        </table>
      <p> <input name = "insert" type = "submit" value = "Go" /> </p>
      </form>
      </body>
      </html>
TOP;
    
 }

 function doInsertData(){
    $command = "SELECT * FROM students WHERE FIRST = \"Amy\"";
	echo "SQL command: $command <br>";

	// Issue the query
	$result = $mysqli->query($command);

	// Verify the result
	if (!$result) {
   		die("Query failed: $mysqli->error <br>");
	} else {
		echo "Query succeeded <br> <br>";
	}
 }
?>
