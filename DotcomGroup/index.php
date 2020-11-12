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
<body class="container">

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
        <a href="#" class="w3-bar-item w3-button w3-padding-large"
        >HOME</a>
        <!-- Assistance tab -->
        <a
                href="#assistance"
                class="w3-bar-item w3-button w3-padding-large w3-hide-small"
        >ASSISTANCE</a>
        <!-- Contact tab -->
        <a
                href="#contact"
                class="w3-bar-item w3-button w3-padding-large w3-hide-small"
        >CONTACT</a>
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
            href="#assistance"
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

<!-- Page content -->
<div class="w3-content pageStyle">
    <!-- The Application Form Section -->
    <!-- Paragraph representing what the Outreach program does -->
    <div class="w3-container w3-content w3-center w3-padding-64 band shadow-lg p-3 mb-5 bg-white rounded">

        <!-- Welcome Message -->
        <div class="w3-container w3-content w3-center w3-padding-64" id="welcomeMessage">
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
    <div id="assistance">
    <div id="formDiv" class="w3-black w3-padding-64 seekingStyle mb-4 d-none">
        <h1 class="w3-wide w3-center">SEEKING HELP?</h1>
        <!-- Zipcode validation and submission -->
        <p class="w3-opacity w3-center w3-large">
            <i>Please enter your residential zip code to get started: </i>
        </p>
        <!-- Zipcode submit button form -->
        <form class="w3-padding-small w3-center" id="zipForm" action="form.php">
            <input id="zipCode" type="text" size="20" placeholder="Zip Code"/>
            <button type="submit" class="btn btn-info w3-button" id="btn-zipCode">Begin</button>
            <br>
            <a class="w3-opacity w3-padding-small w3-hover-opacity-off" href="form.php#residency" >
                <i>I am currently without a residence</i>
            </a>
        </form>
    </div>

    <div id="nonformDiv" class="w3-black w3-padding-64 seekingStyle d-none">
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
    <div class="w3-container w3-content w3-center w3-padding-64 band shadow-lg p-3 mb-5 bg-white rounded">
        <hr class="style13">
        <br>
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
                                <p>There are more resources available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

    <!-- styling break -->
    <div class="w3-black break"></div>

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

    <!-- Footer -->
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
</div>
</body>
</html>
