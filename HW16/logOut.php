<?php session_start();

session_destroy();
echo '<script> alert("You have logged out. Thank you!") </script>';
?>

<a href="homework16.php" class="button">Click here to log back In</a> <br><br>