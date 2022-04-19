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
            <h1>Sandwich Bread</h1>
               <p>Tags</p>

            <h3>Ingredients</h3>
            <ul>
            	<li>3 1/2 c (450 g) all-purpose flour</li>
            	<li>2 t salt</li>
            	<li>1 1/2 t instant yeast</li>
            	<li>1 T honey</li>
                <li>2 T butter, at room temperature</li>
            	<li>1 1/3 c milk, at room temperature</li>
            </ul>

            <h3>Instructions</h3>
            <ol>
                <li>Place the flour in the container of a food processor fitted with the steel blade. Add salt and yeast and process for 5 seconds.</li>
            	<li>With the machine running, add the honey, softened butter, and most of the milk through the feed tube.</li>
            	<li>Process for about 30 secondes, then remove the cover. The doush should be in a barely-sticky, easy-to-handle ball. Knead for a minute or two by hand.</li>
            	<li>Use half the oil to grease a large bowl. Place the dough into the bowl and cover with plastic wrap or a damp towel; let rise at least 2 hours, until nearly doubled in size.</li>
            	<li>Deflate the ball and reshape into a ball; let rest on a lightly floured surface for about 15 minutes.</li>
                <li>Flatten dough into a rectangle, then shape into a loaf. Use the remaining oil to grease a 9"x5" loaf pan. Place loaf into the pan, gently flattening the top with the back of your hand.</li>
                <li>Cover and let rest for 1 hour, until the top of the dough is nearly level with the top of the pan.</li>
                <li>Preheat overn to 350 F. Brush the top of the loaf with water. Bake for 45 minutes, or until the bottom of the loaf sounds hollow when you tap it.</li>
                <li>Cool on wire rack before slicing.</li>
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

