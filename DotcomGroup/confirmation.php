<!--
Ben Chadwick
Jessica Sestak
Husrav Homidov
Tiffany Welo

Team Dotcom
11/1/20
This website is to let the user know that they submitted the form and emails the users information to the client
-->
<?php
/*ini_set('display_errors', 1);
error_reporting(E_ALL);
*/ ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato"/>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles/style.css"/>
    <link rel="shortcut icon"
          href="https://stjameskent.org/wp-content/uploads/2016/09/Episcopal-Church-Shield-transparent-background.png">
    <title>St. James Application</title>
</head>

<body class="container">
<?php


//get data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['emailFrom'];
$addressOne = $_POST['address'];
$addressTwo = $_POST['addressTwo'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$assistance = implode(", ", $_POST['assistance']);
$comment = $_POST['inComment'];
$other = $_POST['otherTextInput'];


//format data to be more easily read
$to = "kkhomidov2@mail.greenriver.edu";
$subject = "Form completed";
$message = "Form completed by: $fname $lname \r\n";
$message .= "Phone: $phone\n";
$message .= "Email: $email\n";
$message .= "Address: $addressOne $addressTwo\n";
$message .= "City: $city\n";
$message .= "Zip: $zip \n\n";
$message .= "Assistance Required: $assistance";
$message .= " $other\n\n";
$message .= "Message: $comment";

//email data
$confirmEmail = "Thank you for submitting your form. Someone will email you shortly.";
$confirmEmailSubject = "St.James Application";
mail($to, $subject, $message);
mail($email, $confirmEmailSubject, $confirmEmail);
?>

<!-- Navbar -->
<div class="w3-top ">
    <div class="w3-center  w3-bar w3-black w3-card">
        <!-- Home tab -->
        <a
                class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0)"
                onclick="myFunction()"
                title="Toggle Navigation Menu"
        ><i class="fa fa-bars"></i
            ></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large"
        >HOME</a>
        
        <div class="w3-dropdown-hover w3-hide-small ">
            <!-- Other Resources tab -->
            <button class="w3-padding-large w3-button" title="More">
                OTHER RESOURCES <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a
                        href="https://www.211.org/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w3-bar-item w3-button"
                >211.ORG</a>
                <a
                        href="http://kentmethodist.com/assistance"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w3-bar-item w3-button"
                >Kent Methodist</a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top navbarStyle">

    <a
            href="#formScroll"
            class="w3-bar-item w3-button w3-padding-large"
            onclick="myFunction()"
    >ASSISTANCE</a
    >

    <a
            href="resources.php"
            class="w3-bar-item w3-button w3-padding-large"
            onclick="myFunction()"
    >RESOURCES</a
    >

    <a
            href="#contact"
            class="w3-bar-item w3-button w3-padding-large"
            onclick="myFunction()"
    >CONTACT</a
    >
</div>

<!-- Note to user thanking them for submitting form -->
<div class="w3-content pageStyle">
    <div class="w3-container w3-content w3-center w3-padding-64 band shadow-lg p-3 mb-5 bg-white rounded" id="main">

        <h2>Thank you for your request. We'll be in touch soon!</h2>
        <div>
            <h4><i>Please</i> <a href="resources.php"><u>click here</u></a> to see the other <b>resources</b> provided!
            </h4>

        </div>
    </div>

    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64 shadow-lg p-3 mb-5 bg-white rounded" id="contact">
        <h2 class="w3-wide w3-center">CONTACTS</h2>
        <div class="w3-row w3-padding-32 w3-center">
            <!--Left Side-->
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <!-- Google Map insertion -->
                <i class="fa fa-map-marker" id="google"></i>
                <a
                        href="https://goo.gl/maps/UEuiGpguDtXozPjN7"
                        target="_blank"
                        rel="noopener noreferrer"
                >
                    24447 94th Ave S, Kent, WA, 98030 </a
                ><br/>
                <i class="fa fa-phone contactFont"></i> Phone:
                253-852-4100<br/>
                <i class="fa fa-envelope contactFont"> </i> Email:
                mail@mail.com<br/>
            </div>

            <!--Right Side-->
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-calendar contactFont"> </i>
                Monday: 1:00pm to 4:00pm <br/>
                Tuesday: 9:00am to 12:00 noon <br/>
                Wednesday: 1:00pm to 4:00pm<br/>
            </div>

        </div>

        <div class="mapouter w3-center w3-content ">
            <div class="gmap_canvas">
                <iframe width="400" height="200" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=24447%2094th%20Ave%20S%2C%20Kent%2C%20WA%2C%2098030&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        ></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
></script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"
></script>
</body>
</html>
