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
            <h3>Log In.</h3>

            <form action="Login_Register/BASE.php" method="POST" action="register.php" novalidate>
                <table>
                    <tr>
                        <td><b>Username: </b></td>
                        <td><input id='user' name='user' type='text'></td>
                    </tr>
                    <tr>
                        <td><b>Password: </b></td>
                        <td><input id='pw' name='pass' type='password'></td>
                    </tr>
                    <tr id='buttons'>
                        <td><input type="submit" name="Login" value="Login" /></td>
                        <td><input type="reset" value="Clear"></td>
                    </tr>

                </table>
            </form>
            <?php
            echo "<button><a href='" . $object['base'] . $object['register'] . "'>Create an Account</a></button>";
            ?>

        </div>
    </div>

    <?php
    //footer
    echo $utils->footer($object);
    ?>

</body>

</html>