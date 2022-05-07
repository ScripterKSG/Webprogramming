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
			echo "<img src='" . $object['image_food']['Visiting Cake'] . "' alt='Visiting Cake'>"
			?>
			<h1>Swedish Visiting Cake</h1>
			<p>Family Recipe</p>

			<h3>Ingredients</h3>
			<ul>
				<li>1 c sugar</li>
				<li>grated zest of one lemon</li>
				<li>2 eggs</li>
				<li>1/4 t salt</li>
				<li>1 t vanilla extract</li>
				<li>1/2 t almond extract</li>
				<li>1 c flour</li>
				<li>8 T butter, melted</li>
				<li>1/4 c sliced almonds</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Preheat oven to 350 F</li>
				<li>In a medium bowl, add lemon zest to sugar. Rub zest and sugar between fingers to release the oils.</li>
				<li>Whisk in eggs one at a time. Whisk in salt and extracts.</li>
				<li>Using a spatula, stir in flour. Fold in putter. Pour into 9" cast iron skillet. Top with almonds and generous sprinkling of sugar.</li>
				<li>Bake for 25-30 minutes.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
