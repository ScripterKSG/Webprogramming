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
            <h1>Sweet Potato Pancakes</h1>
               <p>Tags</p>

            <h3>Ingredients</h3>
            <ul>
                <li>1 medium-sized sweet potato, scrubbed</li>
            	<li>1 c all-purpose flour</li>
            	<li>1 c whole wheat flour</li>
            	<li>4 T baking powder</li>
            	<li>2 T brown sugar</li>
                <li>1 t cinnamon</li>
            	<li>1/4 t nutmeg</li>
            	<li>2 c milk</li>
            	<li>4 t melted butter</li>
            	<li>2 eggs</li>
            </ul>

            <h3>Instructions</h3>
            <ol> 
                <li>Prick sweet potato all over with a fork. Wrap in wax paper or damp paper towel and microwave until tender, about 8-12 minutes. Let cool until cool enough to handle, then peel sweet potato and mash with a fork.</li>
            	<li>Combine dry ingredients in a large bowl and whisk together.</li>
            	<li>In a small bowl, combine egg and milk; whisk until smooth, then add melted butter. Pour into bowl with dry ingredients; add potato. Mix until just combined.</li>
            	<li>Pour 2 T of batter into buttered skillet and cook over medium-high heat until bubbles form on surface, then flip and cook untitl golden brown.</li>
            </ol>

		</div>
	</div>
	
	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>
</html>

