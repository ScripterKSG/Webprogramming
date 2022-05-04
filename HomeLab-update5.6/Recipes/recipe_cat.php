<?php
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
$utils = new Page_stuff;
$session = new SessionsNcookies($object);
$session->render_session(__FILE__);
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
			echo $utils->list_menu($object['premiums'], $object['breakfasts'], $object['image_food']);
			?>
			<h4>Lunch</h4>
			<?php
			echo $utils->list_menu($object['premiums'], $object['lunches'], $object['image_food']);
			?>

			<h4>Dinner</h4>
			<?php
			echo $utils->list_menu($object['premiums'], $object['dinners'], $object['image_food']);
			?>
			<h4>Sides</h4>
			<?php
			echo $utils->list_menu($object['premiums'], $object['sideses'], $object['image_food']);
			?>

			<h4>Dessert</h4>
			<?php
			echo $utils->list_menu($object['premiums'], $object['desserts'], $object['image_food']);
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