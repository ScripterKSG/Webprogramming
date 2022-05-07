<?php
session_start();
if (isset($_POST["database"]) || isset($_SESSION["loggedIn"])) {
    if (isset($_POST["signup"])){
        doThankYou();
    }
    else{
        doDatabase();
    }
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
	<title> X3 </title>
	</head>
	<body>
	<h3> Login Page </h3>
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

    if ($user == "potluck" && $pwd == "feedMeN0w"){
        $_SESSION["loggedIn"] = time();		//session for logged in
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
//	echo "Server: ".$server."<br>";
//	echo "User: ".$user."<br>";
//	echo "Database name: ".$dbName."<br>";

 	$mysqli = new mysqli ($server, $user, $pwd, $dbName);

	// If it returns a non-zero error number, print a message and stop execution immediately

	if ($mysqli->connect_errno) {
  		die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
	}
	$command = "SELECT * FROM dinner";
	$result = $mysqli->query($command);

	echo "<table border='2' width='30%'><br>";
	echo "<caption style='margin-bottom:0.25cm';> <b> Potluck Signup </b> </caption>";
	echo "<tr><th style ='width:130px'> Name </th><th> Items </th></tr>";
	while ($row = $result->fetch_row()){
		echo "<tr><td> $row[0] </td><td> $row[1]</td></tr>";
	}
	echo "</table><br>";

	print<<<BOT
	<html>
	<head>
	<title> X3 </title>
	</head>
	<body>
	<h4> Potluck Signup Form </h4>
	<form method = "POST" action = "$script">
   	<table>
    	<tr>
    	    <td>Name (20 char max):</td>
        	<td> <input name = "name" type = "text" size = "30" maxlength="20" required /> </td>
     	</tr>
      	<tr>
        	<td>Items (100 char max):</td>
        	<td> <input name = "items" type = "text" size = "30" maxlength="100" required /> </td>
    	</tr>
   	</table>
	<p> <input name = "signup" type = "submit" value = "Submit" /> </p>
	</form>
	</body>
	</html>
BOT;
    }


}

function DoThankYou(){
	$script = $_SERVER['PHP_SELF'];

	$server = "spring-2022.cs.utexas.edu";
	$user   = "cs329e_bulko_jasonn12";
	$pwd    = "Mussel7swap3Rail";
	$dbName = "cs329e_bulko_jasonn12";

	$mysqli = new mysqli ($server, $user, $pwd, $dbName);
	$name = $mysqli->real_escape_string($_POST["name"]);
	$items = $mysqli->real_escape_string($_POST["items"]);
	$command = "INSERT INTO dinner (name, items) VALUES ('$name', '$items')";
	$result = $mysqli->query($command);
	unset($_POST["name"]);
	unset($_POST["items"]);
    print <<<ETC
    <html>
	<h3> Thank you for signing up! </h3>
	<form method = "POST" action = "$script">
        <input type="submit" value="Return to Form" />
    	</form>
    </html>
ETC;
}



?>
