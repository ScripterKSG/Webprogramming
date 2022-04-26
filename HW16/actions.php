<?php
session_start();
if (!isset($_SESSION["loggedIn"])){
	header("Location: homework16.php");
	exit();
}
else{
	doActions();
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
    	<input type="submit" value="Logout" />
	</form>

	</body>
	</html>
BUTTONS;
}

?>
