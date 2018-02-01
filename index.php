<?php
/**
 * Created by PhpStorm.
 * User: jpapp
 * Date: 1/14/2018
 * Time: 10:14 PM
 * Route to home.html
 */

//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('vendor/autoload.php');

$f3 = Base::instance();

//set debug level
$f3->set('DEBUG', 3);

$f3->route('GET /',
    function () {
        //load a template
        $template = new Template();
        echo $template->render('pages/home.html');

    }
);
$f3->route('GET /personal',
    function () {
        //load a template
        $template = new Template();
        echo $template->render('pages/personal.php');
    }
);
$f3->route('GET /profile',
    function () {
        //load a template
        $template = new Template();
        echo $template->render('pages/profile.php');
    }
);
$f3->route('GET /interests',
    function () {
        //load a template
        $template = new Template();
        echo $template->render('pages/interests.html');
    }
);

//run fat free
$f3->run();
?>