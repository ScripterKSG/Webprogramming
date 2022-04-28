<?php
session_start();
if (isset($_SESSION["loggedIn"])){
    if (isset($_POST["update"])){
        doUpdateData();
    }
    else{
        doUpdate();
    }
}
else {
    header("Location: homework16.php");
 }

 function doUpdate(){
    $script = $_SERVER['PHP_SELF'];

    print <<<TOP
      <html>
      <head>
      <title> Database Demo </title>
      </head>
      <body>
      <h3> Update Student Record </h3>
      <form method = "POST" action = "$script">
        <table>
        <tr>
        <td>ID:</td>
        <td> <input name = "id" type = "text" size = "30" required /> </td>
        </tr>
        <tr>
        <td>LAST:</td>
        <td> <input name = "last" type = "text" size = "30"  /> </td>
        </tr>
        <tr>
        <td>FIRST:</td>
        <td> <input name = "first" type = "text" size = "30"  /> </td>
        </tr>
        <tr>
        <td>MAJOR:</td>
        <td> <input name = "major" type = "text" size = "30"  /> </td>
        </tr>
        <tr>
        <td>GPA:</td>
        <td> <input name = "gpa" type = "text" size = "30" /> </td>
        </tr>
        </table>
      <p> <input name = "update" type = "submit" value = "Go" /> </p>
      </form>
      </body>
      </html>
TOP;
    
 }

 function doUpdateData(){


	 // GET DATA
	$id = $_POST["id"];
	$last = $_POST["last"];
	$first = $_POST["first"];
	$major = $_POST["major"];
	$gpa = $_POST["gpa"];

    $valid = FALSE;


	//Access database
    $server = "spring-2022.cs.utexas.edu";
    $user   = "cs329e_bulko_jasonn12";
    $pwd    = "Mussel7swap3Rail";
    $dbName = "cs329e_bulko_jasonn12";

	$mysqli = new mysqli ($server, $user, $pwd, $dbName);
	// Issue the query

    if (isset($last)){
        $command = "UPDATE students SET LAST = '$last' WHERE id= $id";
        $result = $mysqli->query($command);
        $valid = TRUE;
    }

    if (isset($first)){
        $command = "UPDATE students SET FIRST = '$first' WHERE id= $id";
        $result = $mysqli->query($command);
        $valid = TRUE;
    }

    if (isset($major)){
        $command = "UPDATE students SET MAJOR = '$major' WHERE id= $id";
        $result = $mysqli->query($command);
        $valid = TRUE;
    }

    if (isset($gpa)){
        $command = "UPDATE students SET GPA = '$gpa' WHERE id= $id";
        $result = $mysqli->query($command);
        $valid = TRUE;
    }

    if (!$valid){
        echo '<script> alert("Please fill out at least one filed") </script>';
	    unset($_POST["update"]);
	    doUpdate();
    }


	// Verify the result
	if (!$result) {
   		die("Query failed: $mysqli->error <br>");
	} else {
		echo "Query succeeded <br> <br>";
	}
	echo "<a href = 'actions.php' class='button'>Click here to return to actions page</a> <br><br>";
 }
?>
