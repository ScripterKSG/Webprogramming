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
        $this->object = $object;
    }
    function Register_validated($post, $user_bank)
    {
        $user = $post['user'];
        $pass = $post['pass'];
        $rpass = $post['rpass'];
        if ($pass != $rpass) {
            //yeet: Password and Repeated Password do not match
            $this->M->alert_redirect("Password and Repeated Password do not match", $this->object['base'] . $this->object['register']);
        }
        if (empty($user) || empty($pass) || empty($rpass)) {
            //yeet: feild left blank
            $this->M->alert_redirect("A feild was left blank", $this->object['base'] . $this->object['register']);
        }
        if (isset($user_bank[$user])) {
            //yeet: user already exists
            $this->M->alert_redirect("Username Already exists", $this->object['base'] . $this->object['login']);
        }
        //resolve
        $this->M->add_toDatabase($user, $pass);
        // session+coookie
        $_SESSION['user'] = $user;
        $_SESSION['id'] = $pass;
        $_SESSION['logged'] = true;
        setcookie("user", $user, time() + $_SESSION['CookieSpanShort'], "/");
        return true;
    }
    function Login_validated($post, $user_bank)
    {
        $user = $post['user'];
        $pass = $post['pass'];
        if ($user_bank[$user] == $pass) {
            // update Session
            $_SESSION['user'] = $user;
            $_SESSION['id'] = $pass;
            $_SESSION['logged'] = true;
            // no cookie?
            setcookie("user", $user, time() + $_SESSION['CookieSpanShort'], "/");
            return true;
        } else {
            $this->M->alert_redirect("Either Username or Password Does not exist", $this->object['base'] . $this->object['login']);
        }
    }
    function Login_Register()
    {

        $user_bank = $this->M->get_fromDatabase();

        if (isset($_POST['Register'])) {
            if ($this->Register_validated($_POST, $user_bank)) {
                //print_r($_SESSION);
                setcookie("logged", "true", time() + $_SESSION['CookieSpanShort'], "/");
                if (!isset($_COOKIE['goto'])) {
                    setcookie("goto",  $this->object['home'], time() + $_SESSION['CookieSpanShort'], "/");
                    $this->M->redirect($this->object['base'] . $this->object['home']);
                }
                $this->M->redirect($this->object['base'] . $_COOKIE['goto']);
            }
        } else if (isset($_POST['Login'])) {
            if ($this->Login_validated($_POST, $user_bank)) {
                //print_r($_SESSION);
                setcookie("logged", "true", time() + $_SESSION['CookieSpanShort'], "/");
                if (!isset($_COOKIE['goto'])) {
                    setcookie("goto",  $this->object['home'], time() + $_SESSION['CookieSpanShort'], "/");
                    $this->M->redirect($this->object['base'] . $this->object['home']);
                }
                $this->M->redirect($this->object['base'] . $_COOKIE['goto']);
            }
        }
    }
}
function register_verificationHelper($post)
{
    $usera = array(
        "too short" => "Username must be at least 6 characters long",
        "too long" => "Username must be less than 10 characters long",
        "letter num" => "Username must contain only letters and numbers",
        "no num start" => "Username may not start with a number"
    );
    $passa = array(
        "too short" => "Password must be at least 6 characters long",
        "too long" => "Password must be less than 10 characters long",
        "letter num" => "Password must contain only letters and numbers",
        "one lowercase" => "Password must have at least one lowercase letter",
        "one uppercase" => "Password must have at least one uppercase letter",
        "one num" => "Password must have at least one number",
    );
    $msgs = array();

    if (isset($post['user'])) {
        //user----
        //lower than 6
        $user = $post['user'];
        if (strlen($user) < 6) {
            array_push($msgs, $usera['too short']);
        }
        // higher than 10
        if (strlen($user) > 10) {
            array_push($msgs, $usera['too long']);
        }
        //letters and nums
        if (!preg_match('/^[A-Za-z0-9]*$/', $user)) {
            array_push($msgs, $usera['letter num']);
        }
        //no num on first
        if (preg_match('/^[0-9].*$/', $user)) {
            array_push($msgs, $usera['no num start']);
        }
    }
    if (isset($post['pass'])) {
        //pass----
        //lower than 6
        $pass = $post['pass'];
        if (strlen($pass) < 6) {
            array_push($msgs, $passa['too short']);
        }
        //greater than 10
        if (strlen($pass) > 10) {
            array_push($msgs, $passa['too long']);
        }
        //num and letters
        if (!preg_match('/^[A-Za-z0-9]*$/', $pass)) {
            array_push($msgs, $passa['letter num']);
        }
        //atleast one uppercase
        if (!preg_match('/.*[A-Z].*/', $pass)) {
            array_push($msgs, $passa['one uppercase']);
        }
        //atleast one lowercase
        if (!preg_match('/.*[a-z].*/', $pass)) {
            array_push($msgs, $passa['one lowercase']);
        }
        //atleast one num
        if (!preg_match('/.*[0-9].*/', $pass)) {
            array_push($msgs, $passa['one num']);
        }
    }


    $out = '<ul>';
    foreach ($msgs as $msg) {
        $out = $out . '<li>' . $msg . '</li>';
    }
    $out = $out . '</ul>';
    return $out;
}
$B = new Base($object, $Mechs);
// login/signin forms handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Register']) || isset($_POST['Login'])) {
        $B->Login_Register();
    }
    if (isset($_POST['Verify'])) {
        //check and output
        $msgs = register_verificationHelper($_POST);
        echo $msgs;
    }
}
