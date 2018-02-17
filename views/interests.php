<!--Jhakon Pappoe
1/31/2018
interests form with checkboxes
-->
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
        <form class="form-horizontal" method="post" action="#">
            <label for="exampleInputEmail1" class="labels">In-Door Interests</label>

            <div class="col-sm-12">
                <div class="form-check">
                    <repeat group="{{ @indoors }}" value="{{ @activity }}">
                        <div class="col-3 float-left">
                            <label class="form-check-label"><input class="form-check-label" type="checkbox"
                                                                   name="indoors[]"
                                                                   value="{{ @activity }}"
                                <check if="!is_null({{ @indoor }})">

                                    <check if="in_array({{ @activity }}, {{ @indoor }})">checked</check>

                                </check>
                                >
                                {{ @activity }}
                            </label>
                        </div>
                    </repeat>
                </div>
            </div>
            </br>
            <h5>Out-door Interests</h5>

            <div class="col-sm-12">
                <div class="form-check">
                    <repeat group="{{ @outdoors }}" value="{{ @activity }}">
                        <div class="col-3 float-left">
                            <label class="form-check-label"><input class="form-check-label" type="checkbox"
                                                                   name="outdoors[]"
                                                                   value="{{ @activity }}"
                                <check if="!is_null({{ @outdoor }})">

                                    <check if="in_array({{ @activity }}, {{ @outdoor }})">checked</check>

                                </check>
                                >
                                {{ @activity }}
                            </label>
                        </div>
                    </repeat>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary float-right">Next ></button>
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