<?php
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;

$session = new SessionsNcookies($object);
$session->log_off();
