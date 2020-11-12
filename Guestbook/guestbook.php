<!--
Author: Husrav Khomidov
Project: Portfolio Project: Guestbook Form
Date: 10/30/2020
-->
<?php
// Include header file
include ('includes/head.html');

?>
<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
    <div class="container">

        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#myTogglerNav"
                aria-controls="myTogglerNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="#" class="navbar-brand">Husrav Khomidov</a>
        <div class="collapse navbar-collapse" id="myTogglerNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="guestbook.php">Home</a>
                <a class="nav-item nav-link" href="admin.php">Admin Page</a>
            </div><!-- navbar -->
        </div>
    </div><!-- container -->
</nav><!-- nav -->

<!-- JUMBOTRON SECTION -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">My Guestbook</h1>
        <p class="lead">Let's connect and stay in touch! Please fill out the quick form below</p>
    </div>
</div>

<section class="get-in-touch">

    <div class="container shadow-lg p-3 mb-5 bg-white rounded">

        <form class="needs-validation" novalidate action="thankyou.php" method="POST">
            <!-- CONTACT INFO GROUPING -->
            <fieldset>
                <legend>Contact Info</legend>
                <!-- First Name -->
                <div class="form-row">
                    <div class="col-6">
                        <label for="fName">First Name</label>
                        <input type="text" class="form-control" id="fName" name="fName" required>
                        <div class="invalid-feedback feedback-pos">
                            Please enter your first name
                        </div>
                    </div>
                    <!-- Last Name -->
                    <div class="col-6">
                        <label for="lName">Last Name</label>
                        <input type="text" class="form-control" id="lName" name="lName" required>
                        <div class="invalid-feedback feedback-pos">
                            Please enter your last name
                        </div>
                    </div>
                </div>
                <!-- Job Title -->
                <div class="form-row">
                    <div class="form-row col-md-6 mr-2">
                        <label>Job Title</label>
                        <input type="text" class="form-control" id="jobTitle" name="jobTitle">
                    </div>
                    <!-- Company  -->
                    <div class="form-row col-md-6">
                        <label>Company</label>
                        <input type="text" class="form-control" id="company" name="company">
                    </div>
                </div>
                <!-- LinkedIn  -->
                <div class="form-row">
                    <div class="form-row col-md-6 mr-2">
                        <label for="url">LinkedIn URL</label>
                        <input type="url" class="form-control" id="url" name="url" placeholder="https://www.linkedin.com/..."
                               pattern="/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/">

                        <div class="invalid-feedback feedback-pos">
                            Please input valid URL
                        </div>
                    </div>
                    <!-- Email  -->
                    <div class="form-row col-md-6">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        <div class="invalid-feedback feedback-pos">
                            Please input valid email ID
                        </div>
                    </div>
                </div>
            </fieldset>
            <hr class="my-4 rgba-white-light">

            <!-- HOW WE MET -->
            <fieldset>
                <legend>How We Met</legend>

                <div class="form-row">
                    <div class="form-row col-md-6 mr-2 mb-5">
                        <label for="howMet">Where Did We Meet?</label>

                        <select id="howMet" class="form-control mb-2" onchange="otherMessage()" name="howMet" required>
                            <option disabled selected value="">Select</option>
                            <option value="meetup">Meetup</option>
                            <option value="jobfair">Job Fair</option>
                            <option value="otherMet">Other</option>
                            <option value="notMet">We haven't met yet</option>
                        </select>
                        <div class="invalid-feedback feedback-pos">
                            Please choose one
                        </div>
                    </div>
                    <div class="form-row col-md-6">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-row col-md-6 d-none" id="otherMet">
                        <label for="otherMeet">Other (Please specify) </label>
                        <textarea class="form-control" id="otherMeet" rows="3" name="otherMet" placeholder="..."></textarea>
                    </div>

                </div>
            </fieldset>

            <hr class="my-4 rgba-white-light">

            <!-- MAILING LIST -->
            <fieldset>
                <legend>Mailing List</legend>
                <div class="form-row">
                    <div class="form-row col-md-6 ml-3">
                        <input type="checkbox" class="form-check-input" id="mailingListCheck">
                        <label class="form-check-label">Please add me to your mailing list</label>
                    </div>
                    <div class="form-row radio d-none" id="radio">
                        <div class="form-check mr-2">
                            <input class="form-check-input" type="radio" name="radio" id="HTMLRadio"
                                   value="HTML" checked>
                            <label class="form-check-label" for="HTMLRadio">
                                HTML
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="TextRadio"
                                   value="Text">
                            <label class="form-check-label" for="TextRadio">
                                Text
                            </label>
                        </div>
                    </div>
                </div>

            </fieldset>

            <hr class="my-4 rgba-white-light">


            <button type="submit" class="btn btn-primary" value="validate">Send</button>
        </form>

    </div>


</section>

<!-- Optional JavaScript; choose one of the two! -->
<script src="scripts/scripts.js"></script>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<script>


</script>


<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>