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
			echo "<img src='" . $object['image_food']['Beef Stroganoff'] . "' alt='Beef'>"
			?>
			<h1>Beef Stroganoff</h1>


			<h3>Ingredients</h3>
			<ul>
				<li>1 T butter</li>
				<li>8 oz baby bella mushrooms, trimmed and sliced</li>
				<li>8 oz beef tenderloin, thinly sliced</li>
				<li>2 T Dijon mustard</li>
				<li>1 c beef stock</li>
				<li>1/2 c sour cream</li>
				<li>1/2 lb wide egg noodles</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Cook the pasta to al dente. Meanwhile, melt the butter in a large saucepan and saute the mushrooms for about 5 minutes. Add stock and 1/2 T mustard,. Reduce the heat so that the mixture is just simmering.</li>
				<li>In a smaller pan, combine tthe beef with the rest of the mustard; brown. Drain fat and add to mushrooms. Continue to simmer.</li>
				<li>Just before the noodles are done, add sour cream to the mushroom-beef mixture. If the sauce is too thick, add a small amount of pasta water until it is the desired thickness.</li>
				<li>Toss with noodles and serve.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
