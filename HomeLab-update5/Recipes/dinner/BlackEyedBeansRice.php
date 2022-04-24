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
			echo "<img src='" . $object['image_food']['BlackEyedBeansRice'] . "' alt='Black eyed beans rice'>"
			?>
			<h1>New Years Black-eyed Peas and Rice</h1>
			<p>Tags</p>

			<h3>Ingredients</h3>
			<h5>Beans:</h5>
			<ul>
				<li>8 oz uncooked bacon</li>
				<li>4 cloves garlic, minced</li>
				<li>2 cans black-eyed peas, drained</li>
				<li>1 t salt</li>
				<li>1 t chili powder</li>
				<li>1 t cumin</li>
				<li>1 t dried oregano</li>
				<li>1 bay leaf</li>
				<li>2 c water or stock</li>
			</ul>
			<h5>Rice:</h5>
			<ul>
				<li>1 t olive oil</li>
				<li>2 cloves garlic, minced</li>
				<li>1 t cumin</li>
				<li>1 t oregano</li>
				<li>1 t salt</li>
				<li>1 T tomato paste</li>
				<li>1 c long-grain rice</li>
				<li>1 1/2 c water</li>
			</ul>
			<h5>For serving:</h5>
			<ul>
				<li>Pickled jalopeños</li>
				<li>One lime, quartered</li>
			</ul>

			<h3>Instructions</h3>
			<h5>Beans:</h5>
			<ol>
				<li>Cook bacon in large pot. Remove, leaving grease, and chop. Set aside.</li>
				<li>Add garlic to pot and cook about 30 seconds. Add peas, spices, bacon, and liquid to pot. Bring to a boil, then reduce heat and simmer, partially covered, while making the rice.</li>
			</ol>
			<h5>Rice:</h5>
			<ol>
				<li>Heat olive oil on medium unitl hot. Add garlic and cook about 30 seconds. Stir in spices and tomato sauce until combined. Add rice and stir.</li>
				<li>Pour in water, increase heat to high, and bring to a boil. When boiling, cover pot and reduce heat to simmer. Cook for 20 minutes, then remove from heat and let stand an additional 10 minutes.</li>
				<li>Serve rice and beans topped witth pickled jalopeños and juice from quartered limes.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>