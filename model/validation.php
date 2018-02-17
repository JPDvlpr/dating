<!--Jhakon Pappoe
1/31/2018
validation function for forms
-->
<?php

//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

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