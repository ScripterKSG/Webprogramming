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
                if (isset($_COOKIE["login"])){
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
				<li class='search_input'><input type="text" placeholder="Search.." ></li>
				<li onmouseover="toggleMenu('sub-recipes')" onmouseout="toggleMenu('sub-recipes')"><a href='Recipes/recipe_cat.php'>Recipes</a>
	                <ul id='sub-recipes' class ='subnav'>
					    <li><a href='Recipes/breakfast/breakfast.php'>Breakfast</a></li>
					    <li><a href='Recipes/lunch/lunch.php'>Lunch</a></li>
					    <li><a href='Recipes/dinner/dinner.php'>Dinner</a></li>
                        <li><a href='Recipes/sides/sides.php'>Sides</a></li>
						<li><a href='Recipes/dessert/dessert.php'>Dessert</a></li>
				    </ul>
                </li>
				<li><a href='Technique/technique.html'>Techniques</a></li>
				<li><a href='contact.php'>Contact Us</a></li>
			</ul>
		</div>

		<div id='content'>

			<img>
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

	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>

</html>
