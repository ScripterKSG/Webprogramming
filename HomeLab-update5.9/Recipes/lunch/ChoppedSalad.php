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
			echo "<img src='" . $object['image_food']['Chopped Salad'] . "' alt='Image of salad topped with vegetables'>"
			?>

			<h1>Chopped Salad with Jalopeño Ranch Dressing</h1>
			<p><a href='https://cooking.nytimes.com/recipes/1022514-chopped-salad-with-jalapeno-ranch-dressing'>Adapted from the New York Times</a></p>

			<h3>Ingredients</h3>
			<h5>Dressing:</h5>
			<ul>
				<li>1/2 C buttermilk</li>
				<li>1/2 C mayonaise</li>
				<li>3 large scallions, trimmed and sliced</li>
				<li>1/3 C cilantro, chopped</li>
				<li>1 medium jalopeño, diced</li>
				<li>1 lime, zested</li>
				<li>1/2 t onion powder</li>
				<li>1/4 t garlic powder</li>
				<li>salt and pepper</li>
			</ul>
			<h5>Salad:</h5>
			<ul>
				<li>3 romaine lettuce hearts</li>
				<li>3 ears of corn, shucked and kernels removed from the cob</li>
				<li>8 radishes, halved and thinly sliced</li>
				<li>2 large, ripe avocados, pitted and diced</li>
				<li>5 scallions, trimmed and thinly sliced</li>
				<li>1/2 C crumbled Cotija cheese</li>
				<li>1 C chopped cilantro</li>
				<li>2 C crumbled tortilla chips</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Prepare the dressing: In a medium bowl, whisk together the dressing ingredients to combine. Season with 3/4 t salt and 1/2 t black pepper.</li>
				<li>In a large bowl, toss the romain with half of the corn, radishes, avocado, scallions, Cotija, cilantro, and chips. Add 1/2 C dressing and toss to coat. Season with salt and pepper.</li>
				<li>Top with the remaining vegetables and chips, scattering on top or arranging in stripes or piles. Drizzle with an additional 1/4 C dressing and serve immediately, serving any remaining dressing and additional crumbled tortilla chips on the side.</li>
			</ol>

			<h3>Variations</h3>
			<ol>
				<li>Chicken salad: Add 1 C cooked chicken to the salad, half in step 2 and half in step 3.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
