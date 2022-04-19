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
			<a href='homelab.php'><img src='imgs/HL_Logo.png' alt='HomeLab logo'></a>
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

	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>

</html>
