<?php
// imports utils and sets base
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
// class that generates page stuff
$utils = new Page_stuff;
/*
cookies/sessions class.. 
"session_start" happens on class initialization
*/
$session = new SessionsNcookies($object);
//the hub of cookies and cookie redirects
$session->home_session();
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
			<h3>Welcome to HomeLab</h3>

			<p>
				HomeLab is where anyone can experiment with different recipes and techniques in the
				comfort of their own home! From the classics like baking a chocolate cake to
				more unique dishes like shakshuka, there's no better resource to learn than HomeLab!
				After all, there's no place like HomeLab.
				
			</p>
			<table class="labs" style="width:25%; height:25%">
			<tr>
				<td><img id="pic1" src="lab1.jpg" alt = "lab1" width = "640" height = "480" /></td>
				<td><img id="pic2" src="lab2.jpg" alt = "lab3" width = "640" height = "480" /></td>
				<td><img id="pic3" src="lab3.jpeg" alt = "lab3" width = "640" height = "480" /></td>
			</tr>
			</table>
		</div>
	</div>

	<?php
	//footer
	echo $utils->footer($object);
	?>

</body>

</html>
