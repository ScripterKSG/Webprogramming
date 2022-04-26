<?php
session_start();
if (isset($_POST["loggedIn"])){
	doActions();
}
else if (isset($_POST["database"])) {
    doDatabase();
} 
else {
    doLogin();
 }

#######################################################################

function doLogin()
 {
  $script = $_SERVER['PHP_SELF'];

  print <<<TOP
	<html>
	<head>
	<title> Database Demo </title>
	</head>
	<body>
	<h3> Log into database </h3>
	<form method = "POST" action = "$script">
   	<table>
    	<tr>
    	    <td>Username:</td>
        	<td> <input name = "user" type = "text" size = "30" required /> </td>
     	</tr>
      	<tr>
        	<td>Password:</td>
        	<td> <input name = "pwd" type = "password" size = "30" required /> </td>
    	</tr>
   	</table>
	<p> <input name = "database" type = "submit" value = "Go" /> </p>
	</form>
	</body>
	</html>
TOP;
  }

#######################################################################

function doDatabase()
  {

    //verify login credentials
    $user = $_POST["user"];
    $pwd = $_POST["pwd"];
    $myFile = "passwd.txt";
    $contents = file($myFile) or die("Failed to read file");

    $name = $user . ":" . $pwd;
    foreach($contents as $line) {
	    if (trim($line) == $name){
	    	$_SESSION["loggedIn"] = time();		//session for logged in
        }
    }
    //if failed, go back to login
    if (!isset($_SESSION["loggedIn"])){
	    echo '<script> alert("Login Failed") </script>';
	    unset($_POST["database"]);
	    doLogin();
    }

    if (isset($_SESSION["loggedIn"])){
	// Optionally store the parameters in variables
	$server = "spring-2022.cs.utexas.edu";
	$user   = "cs329e_bulko_jasonn12";
	$pwd    = "Mussel7swap3Rail";
	$dbName = "cs329e_bulko_jasonn12";

	// For debugging only
	echo "Server: ".$server."<br>";
	echo "User: ".$user."<br>";
	echo "Database name: ".$dbName."<br>";

 	$mysqli = new mysqli ($server, $user, $pwd, $dbName);

	// If it returns a non-zero error number, print a message and stop execution immediately

	if ($mysqli->connect_errno) {
  		die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
	} else {
		echo "Connection successful <br><br>";
	}
    }
}


function doActions(){
print <<<BUTTONS
	<html>
	<head>
	<title> Database Demo </title>
	</head>
	<body>
	<h3> Actions </h3>

	<a href="insert.php" class="button">Insert Student Record</a> <br><br>
	<a href="update.php" class="button">Update Student Record</a> <br><br>
	<a href="delete.php" class="button">Delete Student Record</a> <br><br>
	<a href="view.php" class="button">View Student Record</a> <br><br>

	<form action="logOut.php" method="post">
    	<input type="submit" value=Logout" />
	</form>

	</body>
	</html>
BUTTONS;
}

?>
?>
