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

			<form action="Login_Register/BASE.php" method="POST" action="register.php" onsubmit="return verify();" novalidate>
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
					<tr>
						<td colspan="2">
							<p>Make username between 6-10 characters long, must contain letters and digits.
								Also, must not start with a number. Password must also be between 6 to 10 characters.
								must contain only letters and digits with atleast one lower and uppercase letter, and one digit. </p>
						</td>

					</tr>
					<tr id='buttons'>
						<td><input type="submit" name="Register" value="Register" /></td>
						<td><input type="reset" value="Clear"></td>
					</tr>

				</table>
			</form>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>