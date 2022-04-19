<?php
function redirect($url)
{
	if (!headers_sent()) {
		header('Location: ' . $url);
		exit;
	} else {
		echo '<script type="text/javascript">';
		echo 'window.location.href="' . $url . '";';
		echo '</script>';
		echo '<noscript>';
		echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
		echo '</noscript>';
		exit;
	}
}
?>


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
	<?php
	if (!isset($_COOKIE["login"])) {
		echo "<script>alert('Subscription Needed to Access. Login or Register.');</script>";
		redirect("../../../Login_Register/register.html");
	}
	?>
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

			<img src='Recipes/breakfast/Shakshuka/imgs/Shakshuka.jpg' alt='Shakshuka in a cast-iron skillet'>
			<h1>Shakshuka</h1>
			<p>Tags</p>

			<h3>Ingredients</h3>
			<ul>
				<li>1/4 c olive oil</li>
				<li>3 Anaheim chiles</li>
				<li>1 small onion, diced</li>
				<li>5 cloves of garlic, minced</li>
				<li>1 t cumin</li>
				<li>1 T paprika</li>
				<li>1 28-oz can whole tomatoes</li>
				<li>6 eggs</li>
				<li>1/2 c crumbled feta</li>
				<li>salt and pepper</li>
				<li>warm pitas, for serving</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Heat oil over medium-high heat. Add chiles, onion, and garlic, and cook, stirring occasionally, until soft and golden-brown. Add cumin and paprika and cook, stirring frequently, 1-2 mins.</li>
				<li>Add tomatoes and their liquid, along with 1/2 c water, to pan. Bring to a boil and cook until tomatoes start to fall apart. Crush tomatoes with a spoon or potato masher. Reduce heat to medium and simmer until thickened slightly, about 15 minutes. Add salt and pepper to taste.</li>
				<li>Using the back of a spoon, make 6 evenly-spaced depressions into surface of sauce. Crack eggs into depressions. Cover and cook until yolks are just set, about 5 minutes.</li>
				<li>Sprinkle with feta and serve with pita for dipping.</li>
			</ol>
		</div>
	</div>

	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>

</html>
