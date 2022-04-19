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
            <h1>Slumgullion</h1>
               <p>Tags</p>

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
	
	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>
</html>

