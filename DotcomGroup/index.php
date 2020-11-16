<!--
Ben Chadwick
Jessica Sestak
Husrav Homidov
Tiffany Welo

Team Dotcom
11/1/20
This website is the homepage for St. James Outreach
-->

<?php

// Include header file
include ('includes/head.html');
?>

<!-- Beginning of the main body -->
<body id="pageTop">

<!--NAVBAR-->
<nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top">
    <div class="container">
        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#myTogglerNav"
                aria-controls="myTogglerNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="#pageTop" class="navbar-brand">Kent Outreach</a>
        <div class="collapse navbar-collapse" id="myTogglerNav">
            <div class="navbar-nav">
                <a href="#assistance" class="nav-item nav-link">ASSISTANCE</a>
                <a href="#contact" class="nav-item nav-link">CONTACTS</a>
                <a href="getinvolved.php" class="nav-item nav-link">GET INVOLVED</a>
                <a href="resources.php" class="nav-item nav-link">RESOURCES</a>
            </div><!-- navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-item nav-link" href="control.php">Admin Page</a>
                </li>
            </ul>
        </div>
    </div><!-- container -->
</nav><!-- nav -->

<!-- Page content -->
<div class="w3-content pageStyle">
    <!-- The Application Form Section -->
    <!-- Paragraph representing what the Outreach program does -->
    <div class="w3-container w3-content w3-center w3-padding-64 band shadow-lg p-3 mb-5 bg-white rounded">

        <!-- Welcome Message -->
        <div class="w3-container w3-content w3-center" id="welcomeMessage">
            <h1>St. James Outreach</h1>
        </div>
        <hr class="style13">
        <h2 class="w3-wide w3-center">WHO ARE WE?</h2>
        <br>
        <p class="lead">
            The Outreach provides low income Kent residents and the homeless with
            food, water, clothing, utility shut-off assistance, drivers licenses
            and IDs, and referral information. We also provide school supplies and
            household furnishings, when they are available. Those seeking help
            must live within the Kent school district, be disabled, have children
            living with them, or are senior citizens. We always help the homeless.
            <br><br>The Outreach began almost 30 years ago when St. James saw the need
            arise. During these desperate times, our office is a lifeline for
            those in need. It has evolved into a place that gives hope to those in
            need.
        </p>
    </div>


    <!-- Seeking help section -->
    <div id="assistance" class="mb-5">
        <div id="formDiv" class="w3-center w3-black w3-padding-64 seekingStyle mb-4 d-none">
            <h1 class="w3-wide w3-center">SEEKING HELP?</h1>
            <!-- Zipcode validation and submission -->
            <p class="w3-opacity w3-center w3-large">
                <i>Please enter your residential zip code to get started: </i>
            </p>
            <!-- Zipcode submit button form -->
            <form class="form-inline justify-content-center mb-3" id="zipForm" action="form.php">
                <input id="zipCode" type="text" size="20" placeholder="Zip Code"/>
                <button type="submit" class="btn btn-info w3-button" id="btn-zipCode">Begin</button>
                <br>
            </form>
            <a class="w3-opacity w3-padding-small w3-hover-opacity-off" href="form.php#residency" >
                <i>I am currently without a residence</i>
            </a>
        </div>
    </div>

    <div id="nonformDiv" class="w3-black w3-padding-64 d-none">
        <h1 class="w3-wide w3-center">SEEKING HELP?</h1>
        <p class="w3-opacity w3-center w3-large">
            Please come back during our hours of operation to view our help forms, or please visit our <u>resource</u> page.
        </p>
        <div class="w3-large w3-margin-bottom w3-center">
            <i class="fa fa-calendar contactFont"> </i>
            Monday: 1:00pm to 4:00pm <br/>
            Tuesday: 9:00am to 12:00 noon <br/>
            Wednesday: 1:00pm to 4:00pm<br/>
        </div>
    </div>
    </div>


    <!-- What we help with section -->
    <div class="w3-container w3-content w3-center band shadow-lg p-3 mt-5 bg-white rounded">
        <h2 class="w3-wide w3-center">WHAT WE HELP WITH</h2>
        <div class="w3-row w3-padding-16">
            <p class="lead">
                Appointments are made first come, first served. The online form is only accessible
                during business hours. If you cannot access the
                form it is either outside of business hours or we have filled our appointments for the week.</p><br/>

            <!--RESOURCES OPTIONS-->
            <div class="w3-row-padding w3-center w3-margin-top">
                <div class="w3-third">
                    <div class="w3-home w3-container assistanceStyle">
                        <h4>Utilities</h4><br>
                        <i class="fa fa-home w3-margin-bottom w3-text-theme assistanceFont"></i>
                        <div class="m6 w3-large">
                            <p>We can assist with paying for rent and utilities, such as water and electricity</p>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-car w3-container assistanceStyle">
                        <h4>Gas Voucher</h4><br>
                        <i class="fa fa-car w3-margin-bottom w3-text-theme assistanceFont"></i>
                        <div class="m6 w3-large">
                            <p>We can supply means to get fuel for you</p>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-shopping-cart w3-container assistanceStyle">
                        <h4>Store Voucher</h4><br>
                        <i class="fa fa-shopping-cart w3-margin-bottom w3-text-theme assistanceFont"></i>
                        <div class="m6 w3-large">
                            <p>We have a thrift store which has clothes and household items</p>
                        </div>
                    </div>
                </div>
                <div class="w3-center">
                    <div class="w3-third">
                        <div class="w3-drivers-license w3-container assistanceStyle">
                            <h4>ID Cards</h4><br>
                            <i class="fa fa-drivers-license w3-margin-bottom w3-text-theme assistanceFont"></i>
                            <div class="m6 w3-large">
                                <p>We can assist with getting you a driver's license or an ID card</p>
                            </div>
                        </div>
                    </div>

                    <div class="w3-third">
                        <div class="w3-life-ring w3-container assistanceStyle">
                            <h4>Emergency Supplies</h4><br>
                            <i class="fa fa-life-ring w3-margin-bottom w3-text-theme assistanceFont"></i>
                            <div class="m6 w3-large">
                                <p>We can supply you with food and toiletries</p>
                            </div>
                        </div>
                    </div>

                    <div class="w3-third">
                        <div class="w3-info-circle w3-container assistanceStyle">
                            <h4>More</h4><br>
                            <i class="fa fa-info-circle w3-margin-bottom w3-text-theme assistanceFont"></i>
                            <div class="m6 w3-large">
                                <a class="dropdown-item" href="resources.php">There are more resources available</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

<!-- The Footer Section -->
<div class="w3-container w3-content w3-center w3-padding-64 shadow-lg mb-5 bg-white w3-black rounded" id="contact">
    <!-- Footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 footer-about">
                        <h3 class="mb-5">Hours</h3>

                        <p><i class="fa fa-calendar contactFont"> </i>
                            Monday: 1:00pm to 4:00pm</p>
                        <p>Tuesday: 9:00am to 12:00 noon</p>
                        <p>Wednesday: 1:00pm to 4:00pm</p>

                    </div>

                    <div class="col-md-4 col-lg-4 footer-contact">
                        <h3 class="mb-5">Contacts</h3>
                        <!-- Google Map insertion -->
                        <p><i class="fa fa-map-marker" id="google"></i>
                            <a
                                    href="https://goo.gl/maps/UEuiGpguDtXozPjN7"
                                    target="_blank"
                                    rel="noopener noreferrer"
                            >24447 94th Ave S, Kent, WA, 98030 </a></p>
                        <p><i class="fa fa-phone contactFont"></i> Phone:<a href="tel:253-852-4100">253-852-4100</a></p>
                        <p><i class="fa fa-envelope contactFont"> </i> Email:mail@mail.com</p>
                    </div>

                    <div class="col-md-4 col-lg-3 footer-location">
                        <h3 class="mb-3">Our Location</h3>
                        <!--Google map-->
                        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 200px">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10806.156076848025!2d-122.216393!3d47.381915!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54905eaea6606e61%3A0x206815f453c0e48b!2s24447%2094th%20Ave%20S%2C%20Kent%2C%20WA%2098030!5e0!3m2!1sen!2sus!4v1605391186289!5m2!1sen!2sus"
                                    width="300" height="150" style="border:0;" allowfullscreen="" aria-hidden="false"
                                    tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 footer-menu">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

    <!-- Footer Temp -->
    <footer
            class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge"
    >
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <p class="w3-medium">Made by Dotcom</p>
    </footer>

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
    <script src="scripts/index.js"></script>
    <script src="scripts/zipCode.js"></script>
</body>
</html>
