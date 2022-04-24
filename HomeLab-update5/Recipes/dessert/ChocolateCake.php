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
			echo "<img src='" . $object['image_food']['ChocolateCake'] . "' alt='French Chocolate Cake'>"
			?>
			<h1>Easy Chocolate Cake</h1>
			<p>Tags</p>

			<h3>Ingredients</h3>
			<ul>
				<li>2 c flour</li>
				<li>1 t baking soda</li>
				<li>1/2 t baking powder</li>
				<li>4 oz unsweetened chocolate, chopped</li>
				<li>3 eggs</li>
				<li>1 2/3 c sugar</li>
				<li>1 t vanilla extract</li>
				<li>3/4 c mayonaise</li>
				<li>1 1/3 c water</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Preheat oven to 350 F</li>
				<li>Stir together flour, baking soda, and baking powder.</li>
				<li>Melt chocolate; set aside.</li>
				<li>Beat together eggs, sugar, and vanilla at medium-high speed until thick and light yellow, about 3 minutes.</li>
				<li>Mix together melted chocolate and mayonaise. Add to egg mixture and stir in.</li>
				<li>Add flour mix to batter in 3 parts, alternating with water in 2 parts.</li>
				<li>Bake 30 - 40 minutes in well-greased cake pan, or 18 - 25 minutes for cupcakes.</li>
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