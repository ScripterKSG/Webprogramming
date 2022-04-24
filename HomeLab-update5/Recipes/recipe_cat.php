<?php
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
$utils = new Page_stuff;
$session = new SessionsNcookies($object);
?>
<html lang="en">
<?php
//head
echo $utils->head($object);
?>

<body onload="Render()">
	<?php
	//top
	echo $utils->top($object);
	?>

	<div id="main">
		<?php
		//leftnav
		echo $utils->leftnav($object);
		?>

		<div id='content'>
			<h3>ALL RECIPES</h3>


			<h4>Breakfast</h4>
			<?php
			echo $utils->list_menu($object['premiums'], $object['breakfasts']);
			?>
			<h4>Lunch</h4>
			<?php
			echo $utils->list_menu($object['premiums'], $object['lunches']);
			?>

			<h4>Dinner</h4>
			<?php
			echo $utils->list_menu($object['premiums'], $object['dinners']);
			?>
			<h4>Sides</h4>
			<?php
			echo $utils->list_menu($object['premiums'], $object['sideses']);
			?>

			<h4>Dessert</h4>
			<?php
			echo $utils->list_menu($object['premiums'], $object['desserts']);
			?>
			<br>
			<br>
			<span><b>*</b> means the recipe is for subscribers only!</span>
		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>