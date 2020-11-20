<!--
Author: Husrav Khomidov
Project: Portfolio Project: Guestbook Form
Date: 10/30/2020
-->

<?php
// turn on error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);

// Redirect if form hasn't been submitted
if (empty($_POST)) {
    header("location: index.php");
}


// Include header file
include ('includes/head.html');
include ('includes/alerts.php');
include ("../../../includes/guestbook-cred.php");

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

        <a href="guestbook.php" class="navbar-brand">Husrav Khomidov</a>
        <div class="collapse navbar-collapse" id="myTogglerNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="guestbook.php">Home</a>
                <a class="nav-item nav-link" href="#">Link</a>
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

    <?php
    // Form validation
    // First Name
    if (empty($_POST["fName"])) {
        echo "<p><mark>Invalid First Name</mark></p>";
    } else {
        $fName = $_POST["fName"];
    }

    // Last Name
    if (empty($_POST["lName"])) {
        echo "<p><mark>Invalid Last Name</mark></p>";
    } else {
        $lName = $_POST["lName"];
    }

    // LinkedIn URL
    $url = $_POST["url"];
    if ($url == "") {
        $url = $_POST["url"];
    } else if (!preg_match("/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/", $url)) {
        echo "<p><mark>Invalid URL</mark></p>";
    }

    // Checkbox - if checked, validate email
    if (isset($_POST["mailingListCheck"])){
        $isChecked = true;
    } else {
        $isChecked = false;
    }

    // Email
    $email = $_POST["email"];
    if ($email == "" && !$isChecked) {
        $email = $_POST["email"];
    }
    else if (!preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/", $email)) {
        echo "<p><mark>Invalid Email</mark></p>";
    }

    // How met
    if ($howMet = $_POST["howMet"] == "") {
        echo "<p><mark>Please select how we met</mark></p>";
    } else {
        $howMet = $_POST["howMet"];
    }



    // Get data from POST array
    $jobTitle = $_POST["jobTitle"];
    $company = $_POST["company"];
    $otherMet = $_POST["otherMet"];
    $message = $_POST["message"];
    $radio = $_POST["radio"];

    $sql = "INSERT INTO guestbook_form
            (`Date`, `FirstName`, `LastName`, `JobTitle`, `Company`, `LinkedIn`, `Email`, `HowMet`, `Message`, `MailList`)
            VALUES
            (CURRENT_TIMESTAMP,'$fName', '$lName', '$jobTitle', '$company', '$url', '$email', '$howMet', '$message', '$radio');";


    $success = mysqli_query($conn, $sql);
    if (!$success) {
        echo "<p>Something went wrong...</p>";
    }
    ?>


    <div class="container-comp shadow-lg p-3 mb-5 bg-white rounded">
       <h3 class="mb-5">Thank you</h3>

    </div>
    <div class="container-comp shadow-lg p-3 mb-5 bg-white rounded">
        <dl class="row">
            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9"><?php echo $fName," ", $lName ?>
            </dd>

            <dt class="col-sm-3">Company and Title</dt>
            <dd class="col-sm-9"><?php echo $jobTitle," at ", $company ?>
            </dd>

            <dt class="col-sm-3">LinkedIn</dt>
            <dd class="col-sm-9"><?php echo "<a href=\"$url\" target=\"_blank\">$url</a>" ?>
            </dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9"><?php echo "<a href=\"mailto:$email\" target=\"_blank\">$email</a>" ?>
            </dd>

            <dt class="col-sm-3">How We Met</dt>
            <dd class="col-sm-9"><?php echo $howMet ?>
            </dd>

            <dt class="col-sm-3">Message</dt>
            <dd class="col-sm-9"><?php echo $message ?>
            </dd>

            <dt class="col-sm-3">Mailing List</dt>
            <dd class="col-sm-9"><?php echo $radio ?>
            </dd>
        </dl>
    </div>
</section>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<script src="scripts/scripts.js"></script>
<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>