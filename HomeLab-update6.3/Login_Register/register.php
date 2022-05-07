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
			<span id="output">

			</span>
			<script>
				function Ajax_request(user, pass, pass_rpt) {
					var data = new FormData();
					data.append("user", user.value);
					data.append("pass", pass.value);
					data.append("repeat_pass", pass_rpt.value);
					data.append("Verify", "true");
					$.ajax({
						type: "POST",
						enctype: 'multipart/form-data',
						url: "./Login_Register/BASE.php",
						data: data,
						processData: false,
						contentType: false,
						cache: false,
						timeout: 800000,
						success: function(data) {
							$("#output").html(data);
							console.log("SUCCESS : ", data);
						},
						error: function(e) {
							$("#output").text(e.responseText);
							console.log("ERROR : ", e);
						}
					});
				}
				var user = document.getElementById('user');
				var pass = document.getElementById('pw');
				var pass_rpt = document.getElementById('repeatpw');

				user.addEventListener('keyup', function() {
					Ajax_request(user, pass, pass_rpt);
				});
				pass.addEventListener('keyup', function() {
					Ajax_request(user, pass, pass_rpt);
				});
				user.addEventListener('keydown', function() {
					Ajax_request(user, pass, pass_rpt);
				});
				pass.addEventListener('keydown', function() {
					Ajax_request(user, pass, pass_rpt);
				});
			</script>
		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>