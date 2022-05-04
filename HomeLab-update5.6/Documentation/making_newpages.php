<?php
// get utils, object array, and initialize relative path
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base;
$utils = new Page_stuff;
// default setup above -------------
// include session and cookie handling ----------
$session = new SessionsNcookies($object);
/*
add this if you want to setcookie['goto'] (the cookie that will redirect you here from home)
It will also check if page is premium, handle stuff accordingly
*/
$session->render_session(__FILE__);
?>
<html lang="en">

<?php
//generate <head></head>
echo $utils->head($object);
?>

<body onload="Render()">
    <?php
    //generate <div id='top'></div>
    echo $utils->top($object);
    ?>
    <div id="content">
        [insert blah blah]
        in inserting imgs of links to other pages in project
        best do it in php, echo "some html, href=$object['desired key']"
    </div>
    <?php
    //generate <footer></footer>
    echo $utils->footer($object);
    ?>
</body>



</html>