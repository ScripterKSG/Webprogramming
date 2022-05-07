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
			echo "<img src='" . $object['image_food']['Slumgullion'] . "' alt='Slumgullion'>"
			?>
			<h1>Slumgullion</h1>
			<p>Nicole's family recipe</p>

			<h3>Ingredients</h3>
			<ul>
				<li>1 T butter</li>
				<li>1/2 lb ground beef</li>
				<li>1 c diced yellow or sweet onion</li>
				<li>1-2 cloves of garlic, minced</li>
				<li>1 29-oz can tomato sauce</li>
				<li>1 T dried oregano</li>
				<li>1 lb elbow noodles</li>
				<li>salt and pepper</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Cook pasta to al dente. Meanwhile, melt butter in a large saucepan over medium-high heat. Add garlic and cook for 1-2 minutes. Add onion and cook for 3-4 minutes, until softened. </li>
				<li>Add ground beef to pan and brown. Add tomato sauce and oregano and season with salt and pepper to taste. Reduce heat to medium, and cook until sauce is slightly thickened.</li>
				<li>Drain pasta and add to sauce. Serve.</li>
			</ol>

		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
