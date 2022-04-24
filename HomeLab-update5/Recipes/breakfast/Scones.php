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
			echo "<img src='" . $object['image_food']['Scones'] . "' alt='Scones'>"
			?>
			<h1>Scones</h1>
			<p>Tags</p>

			<h3>Ingredients</h3>
			<ul>
				<li>1 3/4 c flour</li>
				<li>2 1/4 t baking powder</li>
				<li>1 T sugar</li>
				<li>1/2 t salt</li>
				<li>1 1/4 c heavy cream</li>

			</ul>


			<h3>Instructions</h3>
			<ol>
				<li>Preheat oven to 450 F</li>
				<li>Combine dry ingredients in a large bowl and mix.</li>
				<li>Add cream and stir until dough forms a ball, then knead about 1 minute.</li>
				<li>Form dough into a disc about 1/5" thick, then cut into eighths. </li>
				<li>Separate segments and place on a parchment paper-lined baking sheet.</li>
				<li>Bake 15 minutes.</li>
			</ol>

			<h3>Variations</h3>
			<ol>
				<li>Garlic Cheddar scones: Add 1 c shredded cheddar cheese and 1 T garlic powder to dry ingredients.</li>
				<li>Cinnamon Chip scones: Add 3/4 c cinnamon chips to dry ingredients. Sprinkle with cinnamon sugar before baking.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>