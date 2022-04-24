<?php
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
$utils = new Page_stuff;
$Mechs = new Mechs;
/*
Still under construction . . .

*/
session_start();

class Base
{
    function __construct($object, $Mech)
    {
        $this->M = $Mech;
        $this->BANK = $object['base'] . $object['BANK'];
        $this->object = $object;
    }
    function Register_validated($post, $users, $passes)
    {
        $user = $post['user'];
        $pass = $post['pass'];
        $rpass = $post['rpass'];
        if ($pass != $rpass) {
            //yeet: Password and Repeated Password do not match
            echo "<script>alert('Password and Repeated Password do not match');</script>";
            $this->M->redirect($this->object['base'] . $this->object['register']);
        }
        if (empty($user) || empty($pass) || empty($rpass)) {
            //yeet: feild left blank
            echo "<script>alert('A feild was left blank');</script>";
            $this->M->redirect($this->object['base'] . $this->object['register']);
        }
        if (in_array($user, $users)) {
            //yeet: user already exists
            echo "<script>alert('Username Already exists');</script>";
            $this->M->redirect($this->object['base'] . $this->object['login']);
        }
        //resolve
        $this->M->add_toBank($this->BANK, $user, $pass);
        // session+coookie
        $_SESSION['user'] = $user;
        $_SESSION['id'] = $pass;
        $_SESSION['logged'] = true;
        return true;
    }
    function Login_validated($post, $users, $passes)
    {
        $user = $post['user'];
        $pass = $post['pass'];
        if (in_array($user, $users) && in_array($pass, $passes)) {
            // update Session
            $_SESSION['user'] = $user;
            $_SESSION['id'] = $pass;
            $_SESSION['logged'] = true;
            return true;
        } else {
            echo "<script>alert('Either Username or Password Does not exist');</script>";
            $this->M->redirect($this->object['base'] . $this->object['login']);
        }
    }
    function Login_Register($goto)
    {

        $bank = $this->M->get_fromBank($this->BANK);
        $users = $bank[0];
        $passes = $bank[1];
        if (isset($_POST['Register'])) {
            if ($this->Register_validated($_POST, $users, $passes)) {
                //print_r($_SESSION);
                setcookie("logged", "true", time() + $_SESSION['CookieSpanShort'], "/");
                if (!isset($_COOKIE['goto'])) {
                    setcookie("goto",  $this->object['home'], time() + $_SESSION['CookieSpanShort'], "/");
                }
                $this->M->redirect($this->object['base'] . $_COOKIE['goto']);
            }
        } elseif (isset($_POST['Login'])) {
            if ($this->Login_validated($_POST, $users, $passes)) {
                //print_r($_SESSION);
                setcookie("logged", "true", time() + $_SESSION['CookieSpanShort'], "/");
                if (!isset($_COOKIE['goto'])) {
                    setcookie("goto",  $this->object['home'], time() + $_SESSION['CookieSpanShort'], "/");
                }
                $this->M->redirect($this->object['base'] . $_COOKIE['goto']);
            }
        }
    }
}

$B = new Base($object, $Mechs);
// login/signin forms handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Register']) || isset($_POST['Login'])) {
        $B->Login_Register("Home.php");
    }
}
