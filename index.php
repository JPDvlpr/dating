<?php
/**
 * Created by PhpStorm.
 * User: jpapp
 * Date: 1/14/2018
 * Time: 10:14 PM
 * Route to home.html
 */

//error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);

//require the autolaod file
require_once('vendor/autoload.php');

//start session after autoload
session_start();

require_once '/home/jpappoeg/config.php';

require_once('model/dblayer.php');

$f3 = Base::instance();

//set debug level
$f3->set('DEBUG', 3);

$dbh = connect();

$f3->set('indoors', array("tv", "movies", "cooking", "board games", "puzzles", "reading", "playing cards", "video games"));
$f3->set('outdoors', array("hiking", "biking", "swimming", "collecting", "walking", "climbing"));

$f3->route('GET|POST /',
    function () {

        //load a template
        $template = new Template();
        echo $template->render('views/home.html');
    }
);
$f3->route('GET|POST /personal',
    function ($f3) {

        if (isset($_POST['submit'])) {

            $fname = $_POST['fname'];
            //echo $fname;
            $lname = $_POST['lname'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $premium = $_POST['premium'];

            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['age'] = $age;
            $_SESSION['gender'] = $gender;
            $_SESSION['phone'] = $phone;
            $_SESSION['premium'] = $premium;

            include 'model/validation.php';

            if (isset($_SESSION['premium'])) {

                $member = new PremiumMember($_SESSION['fname'], $_SESSION['lname'], $_SESSION['age'],
                    $_SESSION['gender'], $_SESSION['phone']);
                $_SESSION['member'] = $member;
                $premium = $_POST['premium'];
                $_SESSION['premium'] = $premium;
                $f3->set('premium', $premium);

//                $member = new PremiumMember($fname, $lname, $age, $gender, $phone);
//                $_SESSION['member'] = $member;
            } else {
                $member = new Member($fname, $lname, $age, $gender, $phone);
                $_SESSION['member'] = $member;
            }

            $f3->set('fname', $fname);
            $f3->set('lname', $lname);
            $f3->set('age', $age);
            $f3->set('gender', $gender);
            $f3->set('phone', $phone);
            $f3->set('premium', $premium);
            $f3->set('success', $success);
            $f3->set('errors', $errors);


        }

        //load a template
        $template = new Template();
        echo $template->render('views/personal.php');

        if (success) {
            $f3->reroute('./profile');
        }

    }
);
$f3->route('GET|POST /profile',
    function ($f3) {

        $member = $_SESSION['member'];

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $bio = $_POST['bio'];
            $state = $_POST['state'];
            $seeking = $_POST['seeking'];

            include('model/validation.php');

            $_SESSION['email'] = $email;
            $_SESSION['bio'] = $bio;
            $_SESSION['state'] = $state;
            $_SESSION['seeking'] = $seeking;

            if (!isset($_SESSION['premium'])) {
                $f3->reroute('./summary');
            } else {
                $f3->reroute('./interests');
            }

            $f3->set('email', $email);
            $f3->set('bio', $bio);
            $f3->set('state', $state);
            $f3->set('seeking', $seeking);
            $f3->set('success', $success);
            $f3->set('errors', $errors);

            $member->setEmail($email);
            $member->setState($state);
            $member->setSeeking($seeking);
            $member->setBio($bio);
            $_SESSION['member'] = $member;

        }

        //load a template
        $template = new Template();
        echo $template->render('views/profile.php');

    }
);
$f3->route('GET|POST /interests',
    function ($f3) {

        echo 'session: ' . print_r($_SESSION) . 'sesh complete';

        echo 'post: ' . print_r($_POST) . 'post complete';

        //var_dump($_POST['indoor[]']);


        if (isset($_POST['submit'])) {
            $indoor = $_POST['indoors'];
            $outdoor = $_POST['outdoors'];

            include('model/validation2.php');

            echo print_r($errors);

            if ($success) {
                $_SESSION['indoor[]'] = $indoor;
                $_SESSION['outdoor[]'] = $outdoor;

                $f3->reroute('./summary');
            }

            $member = $_SESSION['member'];
            $member->setInDoorActivities($indoor);
            $member->setOutDoorActivities($outdoor);
            $_SESSION['member'] = $member;

            $f3->set('indoor', $indoor);
            $f3->set('outdoor', $outdoor);
            $f3->set('success', $success);
            $f3->set('errors', $errors);
        }

        //load a template
        $template = new Template();
        echo $template->render('views/interests.php');
    }
);
$f3->route('GET|POST /summary',
    function ($f3) {

        //echo 'session: ' . print_r($_SESSION);
        // echo 'post: ' . print_r($_POST);

        $f3->set('fname', $_SESSION['fname']);
        $f3->set('lname', $_SESSION['lname']);
        $f3->set('age', $_SESSION['age']);
        $f3->set('gender', $_SESSION['gender']);
        $f3->set('phone', $_SESSION['phone']);
        $f3->set('email', $_SESSION['email']);
        $f3->set('state', $_SESSION['state']);
        $f3->set('seeking', $_SESSION['seeking']);
        $f3->set('indoor', $_SESSION['indoor[]']);
        $f3->set('outdoor', $_SESSION['outdoor[]']);
        $f3->set('bio', $_SESSION['bio']);
        $f3->set('premium', $_SESSION['premium']);
        $f3->set('member', $_SESSION['member']);

        //echo 'Member: ' . $_SESSION['member'] . ' END';
        //print_r($_SESSION['premium']);

        $member = $_SESSION['member'];

        $fname = $member->getFname();
        $lname = $member->getLName();
        $age = $member->getAge();
        $gender = $member->getGender();
        $phone = $member->getPhone();
        $email = $member->getEmail();
        $state = $member->getState();
        $seeking = $member->getSeeking();
        $bio = $member->getBio();

        $premium = $_SESSION['premium'];

        //premium to a 1 or 0

        if ($premium) {
            $premium = 1;
            $indoor = $_SESSION['indoor[]'];
            $outdoor = $_SESSION['outdoor[]'];

            //concact the interest
            $interests = implode(", ", $indoor);
            $interests .= ", ";
            $interests .= implode(", ", $outdoor);
        } else {
            $premium = 0;
            $interests = null;
        }

        //$success = addMember($fname, $lname, $age, $gender, $phone, $email, $state, $seeking, $bio, $premium, $interests);
        addMember();
        if ($success) {
            echo "Member added successfully";
        }

        //load a template
        $template = new Template();
        echo $template->render('views/summary.php');
    }
);

$f3->route('GET|POST /admin', function ($f3) {

    $Member = getMembers();
    $f3->set('members', $Member);
    $template = new Template();
    echo $template->render('views/admin.html');
});

//run fat free
$f3->run();