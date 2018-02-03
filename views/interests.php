<?php

//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="styles/styles.css">

    <!--    Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-light bg-light">
    <h4 class="navbar">Infinity Dating Website</h4>
</nav>
<div class="container">
    <fieldset>
        <h1 class="page-headers">Interests</h1>
        <hr>
        <form class="form-horizontal" method="post" action="">
            <label for="exampleInputEmail1" class="labels">In-Door Interests</label>
            <check if="{{ isset(@errors['indoor'])}}">
                <h2>{{@errors['indoor']}}</h2>
            </check>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="indoor"
                                   value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">TV</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="indoor"
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Movies</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="indoor"
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Cooking</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="indoor"
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Board Games</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="indoor"
                                   value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Puzzles</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="indoor"
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Reading</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="indoor"
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Playing Cards</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="indoor"
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Video Games</label>
                        </div>
                    </div>
                </div>
            </div>

            <label for="exampleInputEmail1" class="labels">Out-Door Interests</label>
            <check if="{{ isset(@errors['outdoor'])}}">
                <h2>{{@errors['lname']}}</h2>
            </check>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="outdoor"
                                   value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Hiking</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="outdoor"
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Biking</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="outdoor"
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Swimming</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="outdoor"
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Collecting</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="outdoor"
                                   value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Walking</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group form-group-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="outdoor"
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Climbing</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="next-button">Next ></button>

</div>

</form>

</fieldset>
</div>

<!-- Bootstrap JavaScript-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>