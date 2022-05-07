<?php
//page gen stuff
class Page_stuff
{
    function head($object)
    {
        /*
        object: array of
            "title": string, -> title
            "description": string, -> desciption of page or whatever
            "authors": string,  -> list names
            "home_style": string, -> href of css file
            "jQuery": bool, -> yes or no jQuery
            "home_script": string, -> href to main js file
            "base":string, -> base href
        outputs string of html head
        */

        $title = "";
        $description = "ENTER DESCRIPTION";
        $authors = "ENTER AUTHORS";
        $base = "./";
        $style_tag = "";
        $jQuery_tag = "";
        $script_tag = "";

        if (isset($object['title'])) {
            $title = $object['title'];
        }
        if (isset($object['description'])) {
            $description = $object['description'];
        }
        if (isset($object['authors'])) {
            $authors = $object['authors'];
        }
        if (isset($object['base'])) {
            $base = $object['base'];
        }
        if (isset($object['home_style'])) {
            $style_tag = "<link href='" . $object['home_style'] . "' rel='stylesheet'>";
        }
        if ($object['jQuery']) {
            $jQuery_tag = "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
        }
        if (isset($object['home_script'])) {
            $script_tag = "<script type='text/javascript' src='" . $object['home_script'] . "'></script>";
        }

        return "
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
    }
    function top($object)
    {
        /*
        object:
        "home": string, ->link to home.php
        "logo":string, ->link to logo image
        "brand":string, ->brand name "HomeLab"
        "logged":bool, -> user logged in or not
        "register":string, -> href to register page
        */
        $forceHome = "";
        $logo_source = "";
        $brand_name = "";
        $register = "";
        $logoff = "";
        $login = "";
        if (isset($object['forceHome'])) {
            $forceHome = $object['forceHome'];
        }
        if (isset($object['home_logo'])) {
            $logo_source = $object['home_logo'];
        }
        if (isset($object['title'])) {
            $brand_name = $object['title'];
        }
        if (isset($object['register'])) {
            $register = $object['register'];
        }
        if (isset($object['logoff'])) {
            $logoff = $object['logoff'];
        }
        if (isset($object['login'])) {
            $login = $object['login'];
        }

        if ($_SESSION['logged']) {
            $top_signin = "
            <div id='top-signin'>
                <p id='signin'>Signed in: " . $_SESSION['user'] . "</p>
                <a href='" . $logoff . "'><p id='signin'>Log Off</p></a>
            </div>";
        } else {
            $top_signin = "
            <div id='top-signin'>
                <a href='" . $login . "'><p id='signin'>Sign-in</p></a>
            </div>";
        }
        return
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
    }
    function leftnav($object)
    {
        /*
            $object:
            "breakfast": string, 
            "lunch": string,
            "dinner": string,
            "sides" : string,
            "dessert": string,
        */
        $breakfast = "";
        $lunch = "";
        $dinner = "";
        $sides = "";
        $dessert = "";
        $techniques = "";
        $contact = "";
        $recipes = "";
        if (isset($object['breakfast'])) {
            $breakfast = $object['breakfast'];
        }
        if (isset($object['lunch'])) {
            $lunch = $object['lunch'];
        }
        if (isset($object['dinner'])) {
            $dinner = $object['dinner'];
        }
        if (isset($object['sides'])) {
            $sides = $object['sides'];
        }
        if (isset($object['dessert'])) {
            $dessert = $object['dessert'];
        }
        if (isset($object['techniques'])) {
            $techniques = $object['techniques'];
        }
        if (isset($object['contact'])) {
            $contact = $object['contact'];
        }
        if (isset($object['recipes'])) {
            $recipes = $object['recipes'];
        }

        return
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
            </div>";
    }

    function footer($object)
    {
        /*
        generates footer
        */
        $signiature = "";
        if (isset($object['signiature'])) {
            $signiature = $object['signiature'];
        }
        return
            "
        <div id='footer'>
            <div id='date'></div>
            <div id='signature'> <a href='contact.php'>" . $signiature . "</a></div>
        </div>
        ";
    }
    function list_menu($premiums, $meals, $images)
    {
        /*
        does the <li?> link to food </li> thing
        premiums: list of premiums dishes by their name
        meals: list of meals that accompany a meal, ei: list of breakfast meals, lunch meals, so on.. 
        */
        // if (in_array($meal, $premiums))
        $list = "";
        foreach ($meals as $meal => $href) {
            if (in_array($meal, $premiums)) {
                $asterick = "*";
            } else {
                $asterick = "";
            }
            $foodImage = $images[$meal];
            $list = $list . '
            <div id="recipelist">
            <a href="' . $href . '"><img style="max-height: 120px;padding: 5px;border: 1px solid #f9eae1;display: block;margin-left: auto;margin-right: auto" src=' . $foodImage . ' alt="Missing image"></a>
            <p style="margin-left:auto;margin-right:auto;text-align:center;font-size: 20px;font-weight: bold">' . $asterick . '<a href="' . $href . '">' . $meal . '</a></p>
            </div>';
        }
        return $list;
    }
}
// general backend functions, coms with database
class Mechs
{
    function redirect($url)
    {
        /*general redirect function*/
        if (!headers_sent()) {
            header('Location: ' . $url);
            exit;
        } else {
            echo '<script type="text/javascript">';
            echo 'window.location.href="' . $url . '";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
            echo '</noscript>';
            exit;
        }
    }
    function alert_redirect($alert, $url)
    {
        echo "<script>alert('" . $alert . "');
            window.location.href='" . $url . "';</script>";
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
        echo '</noscript>';
        exit;
    }
    function extract_url($file_, $object)
    {
        /*
            $file_ is a "__FILE__" object,
            $object is "$OBJECT"
            outputs file url relative to ROOT
        */
        $url = array_reverse(explode(DIRECTORY_SEPARATOR, $file_));
        if ($object['base'] == "/") {
            $layer = 0;
        } else {
            $layer = substr_count($object['base'], "../");
        }
        $extract = array();
        for ($pnt = 0; $pnt <= $layer; $pnt++) {
            array_unshift($extract, $url[$pnt]);
        }
        return implode("/", $extract);
    }
    function add_toDatabase($user, $pass)
    {
        // add content to file colon dilimeter
        $mysqli = new mysqli("spring-2022.cs.utexas.edu", "cs329e_bulko_marksal1", "Unlike2Thus+Least", "cs329e_bulko_marksal1");
        if ($mysqli->connect_errno) {
            die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
        }
        $command = "INSERT INTO Accounts VALUES ('$user', '$pass')";
        $result = $mysqli->query($command);
        if (!$result) {
            die("Insert failed: ($mysqli->error <br> SQL command = $command");
        }
        $mysqli->close();
    }
    function get_fromDatabase()
    {
        $mysqli = new mysqli("spring-2022.cs.utexas.edu", "cs329e_bulko_marksal1", "Unlike2Thus+Least", "cs329e_bulko_marksal1");
        if ($mysqli->connect_errno) {
            die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
        }

        $command = "SELECT * FROM Accounts";

        $result = $mysqli->query($command);
        if (!$result) {
            die("Select failed: ($mysqli->error <br> SQL command = $command");
        } else {
            $user_bank = array();
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                $user_bank[$row["username"]] = $row["password"];
            }
            //sqli->close()?
            return $user_bank;
        }
    }
}
class SessionsNcookies
{
    /*
    By default: non logged users are guests with id of guest 
    ...something potentially usefull for cookies maybe idk
    COOKIE KEYs config:
        'user' -> username
        'logged' -> boolean on whether user is logged or not
        'goto' -> url relative to ROOT that will redirect user to last
                    left off page when they open the home page
    */
    // php equivalent of the "__init__()" function in python
    function __construct($object)
    {
        /*
        Session Config . . .
        session variables that will be constant throughout use
        */
        session_start();
        // something for later I guess
        $_SESSION['CookieSpanShort'] = 900; // 15 min
        $_SSESSION['CookieSpanMid'] = 900; // 15 min
        $_SESSION['CookieSpanLong'] = 604800; // 1 weak
        $this->object = $object;
        $this->M = new Mechs;
    }
    function yeet_cookie($key)
    {
        if (isset($_COOKIE[$key])) {
            unset($_COOKIE[$key]);
            setcookie($key, '', time() - 3600, "/"); // empty value and old timestamp
        }
    }

    function home_session()
    {
        // if not logged
        if ($_COOKIE['logged'] != 'true') {
            //default guest session
            $_SESSION['user'] = 'guest';
            $_SESSION['id'] = 'guest';
            $_SESSION['logged'] = false;
            setcookie("user", "guest", time() + $_SESSION['CookieSpanShort'], "/");


            // if "goto" exists and is not home page
            if (isset($_COOKIE['goto']) && basename($_COOKIE['goto']) != basename($this->object['home'])) {
                $this->M->redirect($_COOKIE['goto']);
            } else {
                //setup goto cookie to home page
                setcookie("goto", $this->object['home'], time() + $_SESSION['CookieSpanShort'], "/");
            }
        } else { // if logged in condition
            $_SESSION['logged'] = true;
            $_SESSION['user'] = $_COOKIE['user'];
            // if the logged in cookie expired
            if (!isset($_COOKIE['logged'])) {
                $this->M->redirect($this->object['base'] . $this->object['logoff']); //auto logoff -> redirects to home
            } else if (basename($_COOKIE['goto']) != basename($this->object['home'])) {
                //if Logged on an cookie says that user is logged + goto isn't home
                $this->M->redirect($_COOKIE['goto']);
            }
        }
    }
    function render_session($file)
    {
        /*
        input $file "__FILE__" object
        ->adds goto cookie of file
        ->checks if file is premium iteratively
            ->if premium
                ->if not logged
                    ooga booga redirect to login
                -> if logged
                    you good stops function
            -> if naw -> continue
        */
        $file_ = basename($file);
        $goto = $this->M->extract_url($file, $this->object);
        setcookie("goto", $goto, time() + $_SESSION['CookieSpanShort'], "/");
        // only checks the foods pages...modifications needed if you want to add non-food premium pages
        $foods = array(
            $this->object['breakfasts'], $this->object['lunches'],
            $this->object['dinners'], $this->object['desserts'], $this->object['sideses']
        );
        $premiums = $this->object['premiums'];
        foreach ($foods as $meals) {
            foreach ($meals as $meal => $href) {
                $base_ref = basename($href);

                if (in_array($meal, $premiums) && $base_ref == $file_) {
                    // if meal page is premium
                    if (!$_SESSION['logged']) {
                        // if not logged
                        $this->M->alert_redirect("You need to register or log in to access this page", $this->object['base'] . $this->object['login']);
                    } else {
                        return;
                    }
                }
            }
        }
    }
    function log_off()
    {
        session_destroy();
        $_SESSION['user'] = "guest";
        $_SESSION['id'] = 'guest';
        $this->yeet_cookie("goto");
        $this->yeet_cookie("user");
        $this->yeet_cookie("logged");
        $this->M->redirect($this->object['base'] . $this->object['home']);
    }
}
// KEY DIRS....
//      recipe dirs (.php recipes)
$breakfast_ = "Recipes/breakfast";
$lunch_ = "Recipes/lunch";
$dinner_ = "Recipes/dinner";
$dessert_ = "Recipes/dessert";
$sides_ = "Recipes/sides";
$recipes_ = "Recipes";
//      images dirs
$recipeImages_ = "imgs/recipes";
$gen_imgs_ = "imgs";
//  other dirs
$login_reg = "Login_Register";


/*
THE CONFIG THINGY: 
when making edits like adding pages -> modify appropriate PageStuff and add "key":"page href" to $OBJECT array

when adding recipes to the project, add "name (spaced appropriately)" : "href" to breakfast, lunch or whatever...and should auto generate in the recipe listing pages
*/
$OBJECT = array(
    // hrefs ..... all hrefs are from ROOT
    //              -----
    "home" => "homelab.php",
    "home_script" => "homelab.js",
    "register" => $login_reg . "/register.php",
    "login" => $login_reg . "/login.php",
    "logoff" => $login_reg . "/logoff.php",
    "techniques" => "technique.php",
    "contact" => "contact.php",
    "recipes" => $recipes_ . "/recipe_cat.php",
    "breakfast" => $recipes_ . "/breakfast.php",
    "lunch" => $recipes_ . "/lunch.php",
    "dinner" => $recipes_ . "/dinner.php",
    "sides" => $recipes_ . "/sides.php",
    "dessert" => $recipes_ . "/dessert.php",
    "forceHome" => "forceHome.php",
    "home_style" => "homelab.css",
    // hrefs: recipes ...
    //              breakfasts -----
    "breakfasts" => array(
        "Scones" => $breakfast_ . "/Scones.php",
        "Shakshuka" => $breakfast_ . "/Shakshuka.php",
        "Sweet Potato Pancakes" => $breakfast_ . "/SweetPotatoPancakes.php",
    ),

    //              lunches ------
    "lunches" => array(
        "Chopped Salad" => $lunch_ . "/ChoppedSalad.php",
        "Tarragon Chicken Salad" => $lunch_ . "/TarragonChickenSalad.php",
    ),

    //              dinners --------
    "dinners" => array(
        "Baked Alfredo Pasta" => $dinner_ . "/BakedAlfredoPasta.php",
        "Beef Stroganoff" => $dinner_ . "/BeefStroganoff.php",
        "Black Eyed Beans Rice" => $dinner_ . "/BlackEyedBeansRice.php",
        "Slumgullion" => $dinner_ . "/Slumgullion.php",
    ),

    //              sides --------
    "sideses" => array(
        "French Bread" => $sides_ . "/FrenchBread.php",
        "Sandwich Bread" => $sides_ . "/SandwichBread.php",
    ),

    //              desserts -----
    "desserts" => array(
        "Chocolate Cake" => $dessert_ . "/ChocolateCake.php",
        "Visiting Cake" => $dessert_ . "/VisitingCake.php",
    ),
    //              premiums ----- list of recipes that reqiure subscription
    "premiums" => array(
        "Shakshuka", "Chopped Salad", "Baked Alfredo Pasta",
        "French Bread", "Chocolate Cake", "Visiting Cake"
    ),
    // hrefs: images
    "home_logo" => $gen_imgs_ . "/HL_Logo.png",
    "wood" => $gen_imgs_ . "/wood.jpg",
    "woohoo" => $gen_imgs_ . "/Woohooo.png",
    "image_food" => array(
        // breakfast ...
        "Scones" => $recipeImages_ . "/Scones.jpg",
        "Shakshuka" => $recipeImages_ . "/Shakshuka.jpg",
        "Sweet Potato Pancakes" => $recipeImages_ . "/SweetPotatoPancakes.jpg",
        //lunch ...
        "Chopped Salad" => $recipeImages_ . "/ChoppedSalad.jpg",
        "Tarragon Chicken Salad" => $recipeImages_ . "/TarragonChickenSalad.jpg",
        //dinner ...
        "Baked Alfredo Pasta" => $recipeImages_ . "/BakedAlfredoPasta.jpg",
        "Beef Stroganoff" => $recipeImages_ . "/BeefStroganoff.jpg",
        "Black Eyed Beans Rice" => $recipeImages_ . "/BlackEyedBeansRice.jpg",
        "Slumgullion" => $recipeImages_ . "/Slumgullion.jpg",
        //dessert ..
        "Chocolate Cake" => $recipeImages_ . "/ChocolateCake.jpg",
        "Visiting Cake" => $recipeImages_ . "/VisitingCake.jpg",
        //sides ..
        "French Bread" => $recipeImages_ . "/FrenchBread.jpg",
        "Sandwich Bread" => $recipeImages_ . "/SandwichBread.jpg",
    ),
    // Meta ....
    "title" => "HomeLab",
    "description" => "some general desciption of website",
    "authors" => "name of authors",
    "jQuery" => false,
    "signiature" => "© Jason, Nicole, Mark, and Giovani",
);
