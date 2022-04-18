<!DOCTYPE html>

<html lang="en">

<head>
	<link href="format.css" rel="stylesheet">
    <script src="login.js"></script>
</head>


<div id="container">
<div id="top">
	<h1>Cat Newspaper</h1> <br>
    4/14/2022 

	<form action="login.php" method="POST" onsubmit="return validate();">
    <div id="topButton">
        Austin, Texas

	<?php
    if(!isset($_COOKIE["name"])){
	    echo '<input id="hid" name="hid" type="hidden" value=""/>';
        echo '<input id="login" type="submit" value="Login" />';
	}
	else{
		echo "Logged In!";			      
	}
	?>
    </div>
	</form>

</div>

<div id="leftnav">
	<h3> Navigational Links </h3>
	<p>
        <a href="blank.html"> Sports</a><br>
        <a href="blank.html"> Arts & Leisure</a><br>
        <a href="blank.html"> Editorials</a><br>
        <a href="blank.html"> Opinions</a><br>
        <a href="blank.html"> Classified</a><br>
	</p>
</div>
<div id="rightnav">
	<p>
        Cat taking over the roles of man in life.
        <img src="tie.jpg" alt="no image found" style="width:100%; height:50%;">
        The cat asserts dominance.
        <img src="bar.jpg" alt="no image found" style="width:100%; height:50%;">
        <br>
	</p>
</div>

<div id="content">
	<div id="topContent">
		<a style="float:right; margin-right:20px;"> This cat is an adorable menance </a><br>
		<img src="cat.jpg" alt="insert cat here" style="height:400px; width:250px;
		float:right; margin:20px;">

        <h2><u> Today's Headlines</u> </h2>
		<h3>Giant Cat Attacks New York</h3>
		<p>
			A massive, colossal feline has been laying waste to New York City
			for the last 20 decades. New York City is now a ruined land
			where the government projects holograms to make it seem
			like a bustling city to the rest of the world.
		</p>

		<h3>Smaller Less Threatening Cat is not Threatening</h3>
		<p>
			A smaller, much less fearsome feline has been giving everyone
			join in San Antonio as the creature is super soft and sweet.
			It ate my Grandma alive but it's so cute that I forgive it.
		</p>

		<h3>Normal Cat has a Normal Day</h3>
		<p>
			My smaller cat Jeffery has been relaxing at home. It broke into my
			fridge and drank all the milk but besides that it's been the usual hairballs
			and unreasonable sacrifices. On second thought, a cat having a giant
			altar for tribute may be not so normal.
		</p>

        <h2><u> Major News</u> </h2>
        <h3> National News </h3>
        <p>
            Congress has decided in a unanimous vote to not outlaw cats in America despite
            the immense destruction they have caused. Congressmen "Nauta Katluva" states that
            "Cats are just too darn cute to get rid of."
        </p>
        <h3> International News </h3>
        <p>
            The American army is still combating North Korea due to the continuing debating of
            Cats vs Dogs. It's weird that we're having this debating since most North Koreans
            do not own pets."
        </p>
	</div>
</div>
<div id="footer">
	All pictures are under copyright and fairuse.<br>
	Jason Nguyen (123-123-1234) notanemail@yahoo.com
</div>
</div>

</html>