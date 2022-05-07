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
			echo "<img src='" . $object['image_food']['Sandwich Bread'] . "' alt='French Bread'>"
			?>
			<h1>Sandwich Bread</h1>
			<p><a href='https://smile.amazon.com/Cook-Everything_Completely-Revised-Twentieth-Anniversary/dp/1328545431/'>Adapted from How to Cook Everything</a></p>

			<h3>Ingredients</h3>
			<ul>
				<li>3 1/2 c (450 g) all-purpose flour</li>
				<li>2 t salt</li>
				<li>1 1/2 t instant yeast</li>
				<li>1 T honey</li>
				<li>2 T butter, at room temperature</li>
				<li>1 1/3 c milk, at room temperature</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Place the flour in the container of a food processor fitted with the steel blade. Add salt and yeast and process for 5 seconds.</li>
				<li>With the machine running, add the honey, softened butter, and most of the milk through the feed tube.</li>
				<li>Process for about 30 secondes, then remove the cover. The doush should be in a barely-sticky, easy-to-handle ball. Knead for a minute or two by hand.</li>
				<li>Use half the oil to grease a large bowl. Place the dough into the bowl and cover with plastic wrap or a damp towel; let rise at least 2 hours, until nearly doubled in size.</li>
				<li>Deflate the ball and reshape into a ball; let rest on a lightly floured surface for about 15 minutes.</li>
				<li>Flatten dough into a rectangle, then shape into a loaf. Use the remaining oil to grease a 9"x5" loaf pan. Place loaf into the pan, gently flattening the top with the back of your hand.</li>
				<li>Cover and let rest for 1 hour, until the top of the dough is nearly level with the top of the pan.</li>
				<li>Preheat overn to 350 F. Brush the top of the loaf with water. Bake for 45 minutes, or until the bottom of the loaf sounds hollow when you tap it.</li>
				<li>Cool on wire rack before slicing.</li>
			</ol>

			<h3>Variations</h3>
			<ol>
				<li></li>
				<li></li>
				<li></li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
