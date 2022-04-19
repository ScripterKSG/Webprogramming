<!DOCTYPE html>

<html lang="en">

<head>
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
			<a href='homelab.php'><h2 id="brand">HomeLab</h2></a>
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
			
            <h3>About HomeLab</h3>
            <p>HomeLab was inspired by a box of family recipes passed down to Nicole by her grandmother.  
               
            </p> 

            <h3>Contact the team!</h3>

			<ul>
                <li><p>Jason Nguyen
					<br>Phone Number: 713-364-9035
					<br>Email:<a href="mailto:Gxsd120@gmail.com">Gxsd120@gmail.com</a>
				    </p>
				</li>
                <li>
					<p>Giovanni Trujillo
					<br>Phone Number: 713-927-1038
					<br>Email:<a href="mailto:Mndn375@hotmail.com">Mndn375@hotmail.com</a>
					</p>
				</li>
                <li>
					<p>Mark Salinas
					<br>Phone Number: 713-453-2867
					<br>Email:<a href="mailto:Mazy091@gmail.com">Mazy091@gmail.com</a>
					</p>
				</li>
                <li>
					<p>Nicole Estabrook
					<br>Phone Number: 713-231-8600
					<br>Email:<a href="mailto:Laxt248@yahoo.com">Laxt248@yahoo.com</a>
					</p>
				</li>
            </ul>

		</div>
	</div>
	
	<div id='footer'>
		<div id='date'>2.March 2022</div>
		<div id='signature'> <a href='contact.php'>© Jason, Nicole, Mark, and Giovani</a></div>
	</div>

</body>
</html>


