<?php

//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

//$errors = array();
//
//function validName($data){
//    return ctype_alpha($data);
//}
//if (!(validName($_POST['fname']))) {
//    $errors['fname'] = "Please enter a valid first name";
//}
//
//if (!(validName($_POST['lname']))) {
//    $errors['lname'] = "Please enter a valid last name";
//}else{
//    $lname = $_SESSION['lname'];
//}
//
//$success = sizeof($errors) == 0;
//
//if (empty($errors)) {
//    $success = true;
//} else {
//    $success = false;
//}
//
//function validAge($age)
//{
//        return $age >= 18;
//    }
////    !(validAge()){
////        echo 'Invalid age Input';
////    }
//
//function validPhone($data)
//{
//    $phone = '000-0000-0000';
//
//    if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
//        return true;
//    } else {
//        echo 'Invalid phone Input';
//    }
//    return $data;
//}
//
//function validOutdoor($outdoor)
//{
//    if ($outdoor instanceof $outdoor) {
//
//    } else {
//        echo 'Invalid outdoor Input';
//    }
//}
//
//function validIndoor($indoor)
//{
//
//    if ($indoor instanceof $indoor) {
//
//    } else {
//        echo 'Invalid indoor Input';
//    }
//}
//
////print_r($errors);
//print_r($_POST);

$errors = array();
// only check conditions when on page
if ($_SERVER['REQUEST_URI'] == "/328/dating/personal") {
    if (!validName($fname)) {
        $errors['fname'] = "Please enter a valid first name.";
    }
    if (!validName($lname)) {
        $errors['lname'] = "Please enter a valid last name.";
    }
    if (!validAge($age)) {
        $errors['age'] = "Must be 18 or older.";
    }
    if (!validPhone($phone)) {
        $errors['phone'] = "Invalid Number. Numbers and dashes only.";
    }
}
if ($_SERVER['REQUEST_URI'] == "/328/dating/interests") {
    if (!validIndoor($indoor)) {
        $errors['indoors'] = "Please select valid indoor activities.";
    }
    if (!validOutdoor($outdoor)) {
        $errors['outdoors'] = "Please select valid outdoor activities.";
    }
}
$success = sizeof($errors) == 0;
//  string is all alphabetic
function validName($name)
{
    return ctype_alpha($name);
}

//age is numeric and over 18
function validAge($ages)
{
    return is_numeric($ages) && $ages >= 18;
}

//valid phone w/ numbers and -
function validPhone($phone)
{
    if (is_numeric($phone) || (strpos($phone, "-") && !ctype_alpha($phone))) {
        if (strpos($phone, "-") && (strlen($phone) == 12)) {
            return true;
        }
        if (strlen($phone) == 10) {
            return true;
        }
    }
    return false;
}

// must be one of the checkboxes
function validOutdoor($activities)
{
    global $f3;
    $outside = true;
    foreach ($activities as $activity) {
        $outside = in_array($activity, $f3->get('outdoors'));
    }
    return $outside;
}

// must be one of the checkboxes
function validIndoor($activities)
{
    global $f3;
    $inside = true;
    foreach ($activities as $activity) {
        $inside = in_array($activity, $f3->get('indoors'));
    }
    return $inside;
}