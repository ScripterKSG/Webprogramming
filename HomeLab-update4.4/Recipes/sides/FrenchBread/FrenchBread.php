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

	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>

</html>