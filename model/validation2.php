<?php
/**
 * User: jhakon
 * 1/31/2018
 * Page that holds the validation functions for the interest page
 */

// empty array of errors
$errors = array();

if ($_SERVER['REQUEST_URI'] == "../interests")
{
    if (!validIndoor($indoor))
    {
        $errors['indoor'] = "Please select valid activities.";
    }
    if (!validOutdoor($outdoor))
    {
        $errors['outdoor'] = "Please select valid activities.";
    }
}

// must be true to submit
$success = sizeof($errors) == 0;

// must be one of the checkboxes
function validOutdoor($activities)
{
    global $f3;
    $outside = false;
    if (isset($activities) && !empty($activities)) {
        foreach ($activities as $activity)
        {
            $outside = in_array($activity, $f3->get('outdoor'));
        }
        $outside = true;
    }
    return $outside;
}
// must be one of the checkboxes
function validIndoor($activities)
{
    global $f3;
    $inside = false;
    if (isset($activities) && !empty($activities)) {
        foreach ($activities as $activity)
        {
            $inside = in_array($activity, $f3->get('indoor'));
        }
        $inside = true;
    }
    return $inside;
}

$errors = array();
//if (!validIndoor($indoor)) {
//    $errors['indoor'] = "Please enter valid indoor activities";
//}
//if (!validOutdoor($outdoor)) {
//    $errors['outdoor'] = "Please enter valid outdoor activities";
//}