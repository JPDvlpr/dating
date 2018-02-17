<!--
Jhakon Pappoe
1/31/2018
a summary of the users input
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--    Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<div class="container">
    <fieldset>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">

                        <table>
                            <tr>
                                <td>
<!--                                    <label class="summary-labels">Name: {{ @fname }} {{@lname}}</label>-->
                                    Name: {{ @fname }} {{@lname}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="summary-labels">Gender: {{@gender}}</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="summary-labels">Age: {{@age}}</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="summary-labels">Phone: {{@phone}}</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="summary-labels">Email: {{@$_SESSION['email']}}</label>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="summary-labels">State: {{@state}}</label>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="summary-labels">Seeking: {{@seeking}}</label>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="summary-labels">Interests:
                                        <repeat group = "{{ @indoor }}" value = "{{ @activity }}">{{ @activity }},  </repeat>
                                        <repeat group = "{{ @outdoor }}" value = "{{ @activity }}">{{ @activity }},  </repeat>
                                    </label>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <img src="http://kb4images.com/images/image/37185176-image.jpg" class="summary-pic">
                    </div>
                    <div class="form-group">
                        <p class="form-control" id="privacy-fieldset" type="text" readonly>
                            {{@bio}}
                        </p>
                    </div>
                </div>
            </div>
<!--        </form>-->
        <button type="submit" class="btn btn-primary" id="create">Contact Me</button>

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