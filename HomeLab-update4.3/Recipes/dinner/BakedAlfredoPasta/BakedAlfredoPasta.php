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
			<h1>Baked Alfredo Pasta</h1>
			<p>Tags</p>

			<h3>Ingredients</h3>
			<ul>
				<li>8 T butter</li>
				<li>1/2 c panko breadcrumbs</li>
				<li>2 c grated Parmesan</li>
				<li>1 t lemon zest</li>
				<li>1 lb pasta - cavatappi or fusili</li>
				<li>1 bunch broccolini, cut into bite-sized pieces</li>
				<li>1 c heavy cream</li>
				<li>1 garlic clove, minced</li>
				<li>6 oz fresh mozzarella</li>
				<li>salt and pepper</li>
			</ul>

			<h3>Instructions</h3>
			<ol>
				<li>Preheat oven to 500 F</li>
				<li>Melt butter. In a small bowl, combine breadcrumbs, lemon zest, and 1/4 c Parmesan. Stir in 1 T melted butter. Set aside.</li>
				<li>Cook pasta to al dente, adding broccolini during last minute of cooking. Drain, reserving 1/2 c of the pasta water; do not return to pot.</li>
				<li>In the same pot used to cook the pasta, whisk cream, gsrlic, and pasta water into melted butter. Add remaining parmesan and whisk to combine.</li>
				<li>Return pasta and broccolini to pot, stir in mozzarella until well-combined.</li>
				<li>Transfer to 9"x13" baking dish. Top with prepared breadcrumbs. Bake 10-15 minutes.</li>

			</ol>

			<h3>Variations</h3>
			<ol>
				<li>Chicken and broccolini alfredo: Add 1 c chopped, pre-cooked chicken to pot along with mozzarella.</li>
			</ol>

		</div>
	</div>

	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>

</html>
