<?php
session_start();
if (isset($_SESSION["loggedIn"])){
    if (isset($_POST["view"])){
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
        <td> <input name = "id" type = "text" size = "30"  /> </td>
        </tr>
        <tr>
        <td>LAST:</td>
        <td> <input name = "last" type = "text" size = "30"  /> </td>
        </tr>
        <tr>
        <td>FIRST:</td>
        <td> <input name = "first" type = "text" size = "30"  /> </td>
        </tr>
        </table>
      <p> <input name = "view" type = "submit" value = "Go" /> </p>
      </form>


      <form action="viewAll.php" method="post">
            <input type="submit" value="View All Student Records"/>
      </form>
      </body>
      </html>
TOP;

    
 }

 function doViewData(){
	 //begin building command dynamically
    $command = "SELECT * FROM students WHERE 1=1" ;
    // GET DATA
    $allEmpty = TRUE;
    if (!empty($_POST["id"])){
	    $id = $_POST["id"];
	    $command .= " AND id = $id"; 
	    $allEmpty = FALSE;
    }
    if (!empty($_POST["last"])){ 
	    $last = $_POST["last"];
	    $command .= " AND LAST = '$last'";
	    $allEmpty = FALSE;
    }
    if (!empty($_POST["first"])){
	    $first = $_POST["first"];
	    $command .= " AND FIRST = '$first'";
	    $allEmpty = FALSE;
   }
    if ($allEmpty){
    	echo '<script> alert("Please fill out at least one field") </script>';
    	    unset($_POST["view"]);
    	    doView();
    }

    $command .= " ORDER BY LAST, FIRST";

    $server = "spring-2022.cs.utexas.edu";
    $user   = "cs329e_bulko_jasonn12";
    $pwd    = "Mussel7swap3Rail";
    $dbName = "cs329e_bulko_jasonn12";

	$mysqli = new mysqli ($server, $user, $pwd, $dbName);
	// Issue the query

    $result = $mysqli->query($command);
	// Verify the result
	if (!$result) {
   		die("Query failed: $mysqli->error <br> $command");
	} else {
		echo "Query succeeded <br> <br>";
	}


    while($row = $result->fetch_row()){
	echo "$row[0] $row[1] $row[2] $row[3] $row[4] <br>";
    }
    echo "<a href = 'actions.php' class='button'>Click here to return to actions page</a> <br><br>";
 }
?>
