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

			<h3>About HomeLab</h3>
			<p>HomeLab was inspired by a box of family recipes passed down to Nicole by her grandmother.

			</p>

			<h3>Contact the team!</h3>

			<ul>
				<li>
					<p>Jason Nguyen
						<br>Phone Number: 713-364-9035
						<br>Email:<a href="mailto:Gxsd120@gmail.com">Gxsd120@gmail.com</a>
					</p>
				</li>
				<li>
					<p>Giovanni Trujillo
						<br>Phone Number: 713-927-1038
						<br>Email:<a href="mailto:Mndn375@hotmail.com">Mndn375@hotmail.com</a>
					</p>
				</li>
				<li>
					<p>Mark Salinas
						<br>Phone Number: 713-453-2867
						<br>Email:<a href="mailto:Mazy091@gmail.com">Mazy091@gmail.com</a>
					</p>
				</li>
				<li>
					<p>Nicole Estabrook
						<br>Phone Number: 713-231-8600
						<br>Email:<a href="mailto:Laxt248@yahoo.com">Laxt248@yahoo.com</a>
					</p>
				</li>
			</ul>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>