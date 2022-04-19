<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $username = $_POST["user"];
    $password = $_POST["pw"];
    setcookie("login", $username, time() + 120, "/");
}

$_SESSION["login"] = $username;
header("Location: ../homelab.php");
