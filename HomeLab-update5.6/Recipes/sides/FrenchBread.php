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
			echo "<img src='" . $object['image_food']['FrenchBread'] . "' alt='French Bread'>"
			?>
			<h1>French Bread</h1>
			<p>Tags</p>

			<h3>Ingredients</h3>
			<ul>
				<li>1 1/2 T instant yeast</li>
				<li>1/2 c very warm water</li>
				<li>1 1/2 T sugar</li>
				<li>2 C water</li>
				<li>1 1/2 T olive oil</li>
				<li>2 1/4 t salt</li>
				<li>6 c (720 g ) flour</li>
				<li>1 egg white, beaten</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Preheat oven to 425 F</li>
				<li>Proof yeast with warm water; let sit for 10 minutes.</li>
				<li>Add remainint water, oil, salt, and half of the flour. Mix until flour is incorporated, then gradually add remaining flour.</li>
				<li>Knead for 5 minutes, then turn out onto generously floured surface. Every 10 minutes for the next hour, knead 2 or 3 times.</li>
				<li>Divide dough into 4 equal parts, then form into loaves. Brush with egg white, then slash 3 diagonal lines into tops with a very sharp knife.</li>
				<li>Let rise for 30 minutes.</li>
				<li>Bake for 10 minutes at 425F, then reduce temperature to 375 F and bake an additional 20 minutes.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>