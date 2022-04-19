<!DOCTYPE html>

<html lang="en">

<head>
	<base href="../../../">
	<title>HomeLab</title>
	<meta charset="UTF-8">
	<meta name="description" content="ENTER DESCRIPTION HERE">
	<meta name="author" content="ENTER NAME HERE">
	<link href='homelab.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type='text/javascript' src='homelab.js'></script>
</head>

<body onload="Render()">

	<div id='top'>
		<div id="top-img">
			<a href='homelab.php'><img src='.imgs/HL_Logo.png' alt='HomeLab logo'></a>
		</div>
		<div id="top-brand">
			<a href='homelab.php'>
				<h2 id="brand">HomeLab</h2>
			</a>
		</div>
		<div id="top-signin">
			<?php
			if (isset($_COOKIE["login"])) {
				echo "<p id='signin'>Signed in: " . $_COOKIE['login'] . "</p>";
			} else {
				echo "<a href='Login_Register/register.html'><p id='signin'>Sign-in</p></a>";
			}
			?>
		</div>
	</div>

	<div id="main">
		<div id='leftnav'>
			<ul id='nav'>
				<li class='search_input'><input type="text" placeholder="Search.."></li>
				<li onmouseover="toggleMenu('sub-recipes')" onmouseout="toggleMenu('sub-recipes')"><a href='Recipes/recipe_cat.php'>Recipes</a>
					<ul id='sub-recipes' class='subnav'>
						<li><a href='Recipes/breakfast/breakfast.php'>Breakfast</a></li>
						<li><a href='Recipes/lunch/lunch.php'>Lunch</a></li>
						<li><a href='Recipes/dinner/dinner.php'>Dinner</a></li>
						<li><a href='Recipes/sides/sides.php'>Sides</a></li>
						<li><a href='Recipes/dessert/dessert.php'>Dessert</a></li>
					</ul>
				</li>
				<li><a href='Technique/technique.php'>Techniques</a></li>
				<li><a href='contact.php'>Contact Us</a></li>
			</ul>
		</div>

		<div id='content'>

			<img>
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

	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>

</html>