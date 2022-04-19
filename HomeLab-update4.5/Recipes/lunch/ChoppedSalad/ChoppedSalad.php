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

			<img src='Recipes/lunch/ChoppedSalad/imgs/ChoppedSalad.jpg' alt='Image of salad topped with vegetables'>
			<h1>Chopped Salad with Jalopeño Ranch Dressing</h1>
			<p>Tags</p>

			<h3>Ingredients</h3>
			<h5>Dressing:</h5>
			<ul>
				<li>1/2 C buttermilk</li>
				<li>1/2 C mayonaise</li>
				<li>3 large scallions, trimmed and sliced</li>
				<li>1/3 C cilantro, chopped</li>
				<li>1 medium jalopeño, diced</li>
				<li>1 lime, zested</li>
				<li>1/2 t onion powder</li>
				<li>1/4 t garlic powder</li>
				<li>salt and pepper</li>
			</ul>
			<h5>Salad:</h5>
			<ul>
				<li>3 romaine lettuce hearts</li>
				<li>3 ears of corn, shucked and kernels removed from the cob</li>
				<li>8 radishes, halved and thinly sliced</li>
				<li>2 large, ripe avocados, pitted and diced</li>
				<li>5 scallions, trimmed and thinly sliced</li>
				<li>1/2 C crumbled Cotija cheese</li>
				<li>1 C chopped cilantro</li>
				<li>2 C crumbled tortilla chips</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Prepare the dressing: In a medium bowl, whisk together the dressing ingredients to combine. Season with 3/4 t salt and 1/2 t black pepper.</li>
				<li>In a large bowl, toss the romain with half of the corn, radishes, avocado, scallions, Cotija, cilantro, and chips. Add 1/2 C dressing and toss to coat. Season with salt and pepper.</li>
				<li>Top with the remaining vegetables and chips, scattering on top or arranging in stripes or piles. Drizzle with an additional 1/4 C dressing and serve immediately, serving any remaining dressing and additional crumbled tortilla chips on the side.</li>
			</ol>

			<h3>Variations</h3>
			<ol>
				<li>Chicken salad: Add 1 C cooked chicken to the salad, half in step 2 and half in step 3.</li>
			</ol>

		</div>
	</div>

	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>

</html>
