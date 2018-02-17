<!--
Jhakon Pappoe
1/31/2018
personal page with the main user information
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        <h1 class="page-headers">Personal Information11111</h1>
        <hr>

        <form class="form-horizontal" method="post" action="#">
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group form-group-sm">
                        <check if="{{ isset(@errors['fname'])}}">
                            <h2>{{@errors['lname']}}</h2>
                        </check>
                        <label class="labels">First Name</label>
                        <input type="text" name="fname" class="form-control" value="{{ @fname }}">
                    </div>

                    <div class="form-group">
                        <check if="{{ isset(@errors['lname'])}}">
                            <h2>{{@errors['lname']}}</h2>
                        </check>
                        <label class="labels">Last Name</label>
                        <input type="text" name="lname" class="form-control" value="{{ @lname }}">
                    </div>

                    <div class=" form-group">
                        <label class="labels">Age</label>
                        <check if="{{ isset(@errors['age'])}}">
                            <h2>{{@errors['age']}}</h2>
                        </check>
                        <input type="text" name="age" class="form-control" value="{{ @age }}">
                    </div>

                    <!-- Gender radial boxes-->
                    <div class=" form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                   value="male">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                            <check if="{{ @gender == 'male' }}">
                                <p></p>checked
                            </check>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                                   value="female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                            <check if="{{ @gender == 'female' }}">checked</check>
                        </div>
                    </div>
                    <div class="form-group">

                        <label class="labels" for="exampleInputPassword1">Phone Number</label>
                        <check if="{{ isset(@errors['phone'])}}">
                            <h2>{{@errors['phone']}}</h2>
                        </check>
                        <input type="phone_number" class="form-control" name="phone" id="phone"
                               placeholder="555-555-5555" value="{{ @phone }}">
                    </div>

                    <label class=" labels">Premium Membership</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="premium" id="defaultCheck1">
                            <label class="form-check-label">Sign me up for a premium account!</label>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <p class="form-control" id="privacy-fieldset" type="text" readonly><strong>Note:</strong>
                                All
                                information entered is protected by our
                                <a href="#">privacy policy.</a> Profile information can only be viewed by others with
                                your
                                permission.
                            </p>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="next-button">Next ></button>
                    </div>
        </form>
    </fieldset>
</div>
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