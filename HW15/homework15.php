
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="description" content="Login and Password">
    <meta name="author" content="Jason Nguyen">
    <link href= "login.css" rel="stylesheet">
 </head> 



<form id="info" action = "login.php">
    <caption><h3>Login</h3></caption>

    <?php
    if(isset($_GET["invalid"])){
        echo "Invalid Username or Password, please try again";
    }
    ?>

    <label> Username <input name = "user" id="user"  type = "text" size = "20" /> </label><br><br>

    <label> Password <input name = "pass" id="pass"  type = "text" size = "20" /> </label><br><br>
    <input type = "submit" value = "Login" />
    <input type = "reset" value = "Clear" />
    <br>
    <br>
</form>