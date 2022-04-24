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
			echo "<img src='" . $object['image_food']['SweetPotatoPancakes'] . "' alt='Pancakes'>"
			?>
			<h1>Sweet Potato Pancakes</h1>
			<p>Tags</p>

			<h3>Ingredients</h3>
			<ul>
				<li>1 medium-sized sweet potato, scrubbed</li>
				<li>1 c all-purpose flour</li>
				<li>1 c whole wheat flour</li>
				<li>4 T baking powder</li>
				<li>2 T brown sugar</li>
				<li>1 t cinnamon</li>
				<li>1/4 t nutmeg</li>
				<li>2 c milk</li>
				<li>4 t melted butter</li>
				<li>2 eggs</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Prick sweet potato all over with a fork. Wrap in wax paper or damp paper towel and microwave until tender, about 8-12 minutes. Let cool until cool enough to handle, then peel sweet potato and mash with a fork.</li>
				<li>Combine dry ingredients in a large bowl and whisk together.</li>
				<li>In a small bowl, combine egg and milk; whisk until smooth, then add melted butter. Pour into bowl with dry ingredients; add potato. Mix until just combined.</li>
				<li>Pour 2 T of batter into buttered skillet and cook over medium-high heat until bubbles form on surface, then flip and cook untitl golden brown.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>