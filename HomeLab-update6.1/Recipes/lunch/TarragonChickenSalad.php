<?php
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
$utils = new Page_stuff;
$S = new SessionsNcookies($object);
$S->render_session(__FILE__);
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

			<?php
			echo "<img src='" . $object['image_food']['Tarragon Chicken Salad'] . "' alt='Image of Tarragon Chicken Salad'>"
			?>
			<h1>Tarragon Chicken Salad</h1>

			<h3>Ingredients</h3>
			<ul>
				<li>1 lb chicken breast, cooked and pulled apart</li>
				<li>1 T garlic powder</li>
				<li>1/2 c mayonaise</li>
				<li>1/2 c lemon juice</li>
				<li>2 T dijon mustard</li>
				<li>2 T dried tarragon</li>
				<li>1 t black pepper</li>
				<li>1/2 lb seedless red grapes, halved</li>
				<li>1/2 c green onion, minced</li>
				<li>1/2 c celery, diced</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Sprinkle chicken with garlic powder.</li>
				<li>In a large bowl, mix mayonaise, lemon juice, mustard, tarragon, and pepper.</li>
				<li>Add chicken, grapes, green onions, and celery to bowl, mix well to combine.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
