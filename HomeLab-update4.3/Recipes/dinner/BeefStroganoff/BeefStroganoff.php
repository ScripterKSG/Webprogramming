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
            <h1>Beef Stroganoff</h1>
               <p>Tags</p>

            <h3>Ingredients</h3>
            <ul>
            	<li>1 T butter</li>
            	<li>8 oz baby bella mushrooms, trimmed and sliced</li>
            	<li>8 oz beef tenderloin, thinly sliced</li>
            	<li>2 T Dijon mustard</li>
                <li>1 c beef stock</li>
            	<li>1/2 c sour cream</li>
            	<li>1/2 lb wide egg noodles</li>
            </ul>

            <h3>Instructions</h3>
            <ol>
                <li>Cook the pasta to al dente. Meanwhile, melt the butter in a large saucepan and saute the mushrooms for about 5 minutes. Add stock and 1/2 T mustard,. Reduce the heat so that the mixture is just simmering.</li>
            	<li>In a smaller pan, combine tthe beef with the rest of the mustard; brown. Drain fat and add to mushrooms. Continue to simmer.</li>
            	<li>Just before the noodles are done, add sour cream to the mushroom-beef mixture. If the sauce is too thick, add a small amount of pasta water until it is the desired thickness.</li>
            	<li>Toss with noodles and serve.</li>
            </ol>

		</div>
	</div>
	
	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>
</html>

