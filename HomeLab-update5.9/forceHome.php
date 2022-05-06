<?php
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
$Mech = new Mechs;
$session = new SessionsNcookies($object);
setcookie("goto", $object['home'], time() + $_SESSION['CookieSpanShort'], "/");
$Mech->redirect($object['base'] . $object['home']);
