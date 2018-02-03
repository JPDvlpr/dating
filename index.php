<?php
/**
 * Created by PhpStorm.
 * User: jpapp
 * Date: 1/14/2018
 * Time: 10:14 PM
 * Route to home.html
 */

//start session
session_start();

//require the autolaod file
require_once('vendor/autoload.php');

//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

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
$f3->route('GET|POST /personal',
    function ($f3, $params) {

        if (isset($_POST['submit'])) {

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];

            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['age'] = $age;
            $_SESSION['gender'] = $gender;
            $_SESSION['phone'] = $phone;

            include 'model/validation.php';

            $f3->set('fname', $fname);
            $f3->set('lname', $lname);
            $f3->set('age', $age);
            $f3->set('gender', $gender);
            $f3->set('phone', $phone);
            $f3->set('success', $success);
            $f3->set('errors', $errors);
        }

        //load a template
        $template = new Template();
        echo $template->render('views/personal.php');

        if($success) {
            $f3->reroute('./profile');
        }
    }
);
$f3->route('GET|POST /profile',
    function ($f3, $params) {

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $state = $_POST['state'];
            $bio = $_POST['bio'];
            $seeking = $_POST['seeking'];

            $_SESSION['email'] = $email;
            $_SESSION['state'] = $state;
            $_SESSION['bio'] = $bio;
            $_SESSION['seeking'] = $seeking;

            include('model/validate.php');

            $f3->set('email', $email);
            $f3->set('state', $state);
            $f3->set('bio', $bio);
            $f3->set('seeking', $seeking);
            $f3->set('errors', $errors);
            $f3->set('success', $success);
            //load a template
        }
        $template = new Template();
        echo $template->render('views/profile.php');


            $f3->reroute('./interests');

    }
);
$f3->route('GET|POST /interests',
    function ($f3, $params) {

        if (isset($_POST['submit'])) {
            $indoor = $_POST['indoors'];
            $outdoor = $_POST['outdoors'];
            $_SESSION['indoor'] = $indoor;
            $_SESSION['outdoor'] = $outdoor;

            include('model/validate.php');

            $f3->set('indoor', $indoor);
            $f3->set('outdoor', $indoor);
            $f3->set('errors', $errors);
            $f3->set('success', $success);
        }
        //load a template
        $template = new Template();
        echo $template->render('views/interests.php');

        if($success) {
            $f3->reroute('./summary');
        }
    }
);
$f3->route('GET|POST /summary',
    function ($f3,$params) {

        $f3->set('fname', $_SESSION['fname']);
        $f3->set('lname', $_SESSION['lname']);
        $f3->set('age', $_SESSION['age']);
        $f3->set('gender', $_SESSION['gender']);
        $f3->set('phone', $_SESSION['phone']);
        $f3->set('email', $_SESSION['email']);
        $f3->set('state', $_SESSION['state']);
        $f3->set('seeking', $_SESSION['seeking']);
        $f3->set('indoor', $_SESSION['indoor']);
        $f3->set('outdoor', $_SESSION['outdoor']);
        $f3->set('bio', $_SESSION['bio']);

        //load a template
        $template = new Template();
        echo $template->render('views/summary.php');
    }
);

//run fat free
$f3->run();
?>