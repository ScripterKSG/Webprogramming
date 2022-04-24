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
			<h3>Introduction to Techniques</h3>

			<p>There are several techniques that are useful for any home
				cook's repitoire. We will cover skills such as how to properly
				hold a chef's knife and how to dice various herbs and vegetables.
				These skills are a simple yet effective way to improve your cooking
				abilities and your confidence!
			</p>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>