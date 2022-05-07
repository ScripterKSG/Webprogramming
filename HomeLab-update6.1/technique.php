<?php
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
$utils = new Page_stuff;
$session = new SessionsNcookies($object);
$session->render_session(__FILE__);
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
				cook's repertoire. We will cover skills such as how to properly
				use a chef's knife, how to toss food in a pan, and how to dice various herbs and vegetables.
				These skills are a simple yet effective way to improve your cooking
				abilities and your confidence!
			</p>
			<br><br>
			<h4>Basic Knife Skills</h4>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/G-Fg7l7G1zw" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<br><br><br>
			<h4>Tossing food</h4>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/wRtGM3f-UBc" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<br><br><br>
			<h4>How to knead bread</h4>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/ySOj0fFWo1U" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<br>
		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
