<?php
// imports utils and sets base
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
// class that generates page stuff
$utils = new Page_stuff;
/*
cookies/sessions class.. 
"session_start" happens on class initialization
*/
$session = new SessionsNcookies($object);
//the hub of cookies and cookie redirects
$session->home_session();
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
			<h3>Welcome to HomeLab</h3>

			<p>HomeLab is a website featuring several home economic techniques and recipes that are primarily related to cooking and knitting.
				There is no better place to learn and experiment than the comfort of your own home!</p>
			<?php
			echo "<img src='" . $object['woohoo'] . "' id='woohooo' alt='HomeLab logo2'>";
			?>
		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>