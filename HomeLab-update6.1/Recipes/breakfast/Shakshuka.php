<?php
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
$utils = new Page_stuff;
$S = new SessionsNcookies($object);
$S->render_session(__FILE__); // blah
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
			echo "<img src='" . $object['image_food']['Shakshuka'] . "' alt='Shakshuka in a cast-iron skillet'>"
			?>
			<h1>Shakshuka</h1>
			<p><a href='https://cooking.nytimes.com/recipes/1014721-shakshuka-with-feta'>Adapted from the New York Times</a></p>

			<h3>Ingredients</h3>
			<ul>
				<li>1/4 c olive oil</li>
				<li>3 Anaheim chiles</li>
				<li>1 small onion, diced</li>
				<li>5 cloves of garlic, minced</li>
				<li>1 t cumin</li>
				<li>1 T paprika</li>
				<li>1 28-oz can whole tomatoes</li>
				<li>6 eggs</li>
				<li>1/2 c crumbled feta</li>
				<li>salt and pepper</li>
				<li>warm pitas, for serving</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Heat oil over medium-high heat. Add chiles, onion, and garlic, and cook, stirring occasionally, until soft and golden-brown. Add cumin and paprika and cook, stirring frequently, 1-2 mins.</li>
				<li>Add tomatoes and their liquid, along with 1/2 c water, to pan. Bring to a boil and cook until tomatoes start to fall apart. Crush tomatoes with a spoon or potato masher. Reduce heat to medium and simmer until thickened slightly, about 15 minutes. Add salt and pepper to taste.</li>
				<li>Using the back of a spoon, make 6 evenly-spaced depressions into surface of sauce. Crack eggs into depressions. Cover and cook until yolks are just set, about 5 minutes.</li>
				<li>Sprinkle with feta and serve with pita for dipping.</li>
			</ol>

            <h3>Variations</h3>
			<ol>
				<li>Eggs in Purgatory: Use 1 large spring of fresh basil or rosemary in liey of cumin and paprika, and top with Parmesan instead of feta.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
