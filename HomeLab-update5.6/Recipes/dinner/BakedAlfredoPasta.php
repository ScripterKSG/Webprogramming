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
			echo "<img src='" . $object['image_food']['BakedAlfredoPasta'] . "' alt='Pasta'>"
			?>
			<h1>Baked Alfredo Pasta</h1>
			<p><a href='https://cooking.nytimes.com/recipes/1020820-baked-alfredo-pasta-with-broccoli-rabe-and-lemon'>Adapted from the New York Times</a></p>

			<h3>Ingredients</h3>
			<ul>
				<li>8 T butter</li>
				<li>1/2 c panko breadcrumbs</li>
				<li>2 c grated Parmesan</li>
				<li>1 t lemon zest</li>
				<li>1 lb pasta - cavatappi or fusili</li>
				<li>1 bunch broccolini, cut into bite-sized pieces</li>
				<li>1 c heavy cream</li>
				<li>1 garlic clove, minced</li>
				<li>6 oz fresh mozzarella</li>
				<li>salt and pepper</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Preheat oven to 500 F</li>
				<li>Melt butter. In a small bowl, combine breadcrumbs, lemon zest, and 1/4 c Parmesan. Stir in 1 T melted butter. Set aside.</li>
				<li>Cook pasta to al dente, adding broccolini during last minute of cooking. Drain, reserving 1/2 c of the pasta water; do not return to pot.</li>
				<li>In the same pot used to cook the pasta, whisk cream, gsrlic, and pasta water into melted butter. Add remaining parmesan and whisk to combine.</li>
				<li>Return pasta and broccolini to pot, stir in mozzarella until well-combined.</li>
				<li>Transfer to 9"x13" baking dish. Top with prepared breadcrumbs. Bake 10-15 minutes.</li>

			</ol>

			<h3>Variations</h3>
			<ol>
				<li>Chicken and broccolini alfredo: Add 1 c chopped, pre-cooked chicken to pot along with mozzarella.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
