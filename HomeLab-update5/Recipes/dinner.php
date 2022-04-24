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
			<h3>Dinner Recipes</h3>
			<?php
			echo $utils->list_menu($object['premiums'], $object['dinners']);
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