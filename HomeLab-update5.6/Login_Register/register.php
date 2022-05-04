<?php
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
$utils = new Page_stuff;
$session = new SessionsNcookies($object);
?>

<html lang="en">

<?php
//head
echo $utils->head($object);
?>

<body onload="Render()">

	<?php
	//top
	echo $utils->top($object);
	?>

	<div id="main">
		<?php
		//leftnav
		echo $utils->leftnav($object);
		?>

		<div id='content'>
			<h3>To create an account, please choose a username and password.</h3>
                <ul>
                    <li>Username must be 6 to 10 characters long, must contain only letters and digits, and cannot start with a number.</li>
					<li>Password must be 6 to 10 characters, must contain only letters and digits, and must contain at least one lowercase letter, one uppercase letter, and one digit.</li>
                </ul>
			
            <form action="Login_Register/BASE.php" method="POST" onsubmit="return verify();" novalidate>
				<table>
					<tr>
						<td><b>Username: </b></td>
						<td><input id='user' name='user' type='text'></td>
					</tr>
					<tr>
						<td><b>Password: </b></td>
						<td><input id='pw' name='pass' type='password'></td>
					</tr>
					<tr>
						<td><b>Repeat password: </b></td>
						<td><input id='repeatpw' name='rpass' type='password'></td>
					</tr>
					<tr id='buttons'>
						<td><input type="submit" name="Register" value="Register" /></td>
						<td><input type="reset" value="Clear"></td>
					</tr>
				</table>
			</form>
			<?php
            echo "<p>Already have an account? <a href= '" . $object['login'] . "'>Log in here</a></p>";
			?>
		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
