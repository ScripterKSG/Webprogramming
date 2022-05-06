<?php
/*
pack.php-> gets pack.php of local directory -> gives you $base (relative dir thing "./", "../", "../../" so on)
and $OBJECT: an array of a shit ton of info hrefs of all relavent files in the project.
*/
include "./pack.php";
$object = $OBJECT;
$object['base'] = $base; // $object doesn't inherantly have base, so it needs to be initialized
$utils = new Page_stuff; //class for php generated page elements 
$S = new SessionsNcookies($object); //class for cookies and session...initializing class will exicute session_start()
$S->home_session(); // handles cookie set redirects "goto" and checks if user is logged in and stuff...this function is exclusive to home page

/*
render_session: 
-__FILE__: the absolute path of current file-> the relative path gets extracted in function
-sets cookie of current page setting the "goto" key to href of current page
-runs a check to see if current page is a "premium" page or not
    ->if premium, are you logged
        ->if naw redirect to login.php
        ->else, you gutchi and stops function exicution
    ->else continue
_function uses current file and compares it to the hrefs of $OBJECT['premiums']:
    -adding recipe names to $OBJECT['premiums'] array will make that recipe premium
        -make sure recipe name is spaced appropriately, "chicken sandwitch" instead of "ChickenSandiwitch"
*/
$S->render_session(__FILE__);

//Note: home_session() and render_session() should not be exicuted in the same file
?>
<html lang="en">

<?php
//generates head tag
echo $utils->head($object);
/*
Page_stuff->head($object) output:
"
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <base href='" . $base . "'>
        <title>" . $title . "</title>
        <meta name='description' content='" . $description . "'>
        <meta name='authors' content='" . $authors . "'>
        " . $style_tag . "
        " . $jQuery_tag . "
        " . $script_tag . "
    </head>
";
-$base = $OBJECT['base'], set by getting base from "pack.php"
-$title, $description, $authors are variables of the Meta vars in $OBJECT
-$style_tag: "<link href='" . $object['home_style'] . "' rel='stylesheet'>"
-$script_tag: "<script type='text/javascript' src='" . $object['home_script'] . "'></script>"
-Currently the $jQuery_tag outputs nothing, because $OBJECT['jQuery'] = false;
if we decide to use jQuery in the future, set it to true
*/
?>

<body onload="Render()">
    <?php
    //top
    echo $utils->top($object);
    /*
    Page_stuff->top($object) output:
    "<div id='top'>
        <div id='top-img'>
            <a href='" . $forceHome . "'><img src='" . $logo_source . "' alt='HomeLab logo'></a>
        </div>
        <div id='top-brand'>
            <a href='" . $forceHome . "'>
                <h2 id='brand'>" . $brand_name . "</h2>
            </a>
        </div>
        " . $top_signin . "
    </div>";
    -$forceHome: path to forceHome.php -> which redirects to home.php
    -$logo_source: path to logo img
    -
    -$top_signin: "top_signin" div either shows signin link or shows "logged in username and logoff link" depending on whether the user is logged in
    */
    ?>

    <div id="main">
        <?php
        //leftnav
        echo $utils->leftnav($object);
        /*
        Page_stuff->leftnav($object) output:
        "<div id='leftnav'>
            <ul id='nav'>
                <li onmouseover='toggleMenu(\"sub-recipes\")' onmouseout='toggleMenu(\"sub-recipes\")'><a href='" . $recipes . "'>Recipes</a>
                    <ul id='sub-recipes' class='subnav'>
                        <li><a href='" . $breakfast . "'>Breakfast</a></li>
                        <li><a href='" . $lunch . "'>Lunch</a></li>
                        <li><a href='" . $dinner . "'>Dinner</a></li>
                        <li><a href='" . $sides . "'>Sides</a></li>
                        <li><a href='" . $dessert . "'>Dessert</a></li>
                    </ul>
                </li>
                <li><a href='" . $techniques . "'>Techniques</a></li>
                <li><a href='" . $contact . "'>Contact Us</a></li>
            </ul>
        </div>"
        */
        ?>

        <div id='content'>
            free to write whatever.
            would recomend that any references to images or other files
            contained in the project by php generated, using the hrefs/urls from $OBJECTs array

            All hrefs/urls in $OBJECT is relative to the project root, the
            base tag in the head tag will make any and all hrefs in html and php generated html be relative to project root by defualt
            so just do "href = $OBJECT['key of path relative to project root']"
        </div>
    </div>

    <?php
    //footer
    echo $utils->footer($object);
    /*
     Page_stuff->footer($object) output:
     "  <div id='footer'>
            <div id='date'></div>
            <div id='signature'> <a href='contact.php'>" . $signiature . "</a></div>
        </div>
        "
    */
    ?>

</body>
<!--
    -----------------------------------------------------------
-->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="./"> <!-- or "../" or "../../", from $OBJECT['base'], initialized by page' -->
    <title>HomeLab</title> <!-- $OBJECT['title'] -->
    <meta name='description' content="blah blah"> <!-- content = $OBJECT['description'] -->
    <meta name='authors' content="author or authors"> <!-- content = $OBJECT['authors'] -->
    <link href="homelab.css" rel='stylesheet'> <!-- href = $OBJECT['home_style'], base tag applies to this-->
    <!-- no jQuery imported or initialized, since $OBJECT['jQuery'] = false-->

    <script type='text/javascript' src="Homlab.js"></script>
    <!--src=$OBJECT['home_script'], base tag applies-->

</head>

<body>
    <div id='top'>
        <div id='top-img'>
            <a href="forceHome.php"><img src="HL_Logo.png"></a> <!-- href=$OBJECT['forceHome'] src=$OBJECT['home_logo']-->
        </div>
        <div id="top-brand">
            <a href="forceHome.php">
                <!-- -->
                <h2 id='brand'>HomeLab</h2> <!-- -->
            </a>
        </div>
    </div>
    <!-- so on so forth..-->
</body>

</html>