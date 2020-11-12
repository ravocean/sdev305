<!--
Ben Chadwick
Jessica Sestak
Husrav Homidov
Tiffany Welo

Team Dotcom
11/1/20
This website is the resources for St. James Outreach
-->
<?php

// Include header file
include ('includes/head.html');

?>
<body class="container">

<!--NAV BAR-->
<div class="w3-top mb-4">
    <div class="w3-bar w3-black w3-card w3-content band shadow-lg bg-white rounded">
        <!-- Home tab -->
        <a
                class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0)"
                onclick="myFunction()"
                title="Toggle Navigation Menu"
        ><i class="fa fa-bars"></i
        ></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>

        <div class="w3-dropdown-hover w3-hide-small ">
            <button class="w3-padding-large w3-button" title="More">
                OTHER RESOURCES <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a
                        href="https://www.211.org/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w3-bar-item w3-button"
                >211.org</a
                >
                <a
                        href="http://kentmethodist.com/assistance"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w3-bar-item w3-button"
                >Kent United Methodist</a
                >
            </div>
        </div>
    </div>
</div>

<div class="w3-black w3-container w3-content w3-center w3-padding-64 band shadow-lg p-3 mb-5 bg-white rounded">
    <h2 class="w3-wide w3-center">COMMUNITY RESOURCES</h2>
</div>

<!--LINKS AND DESCRIPTION SECTION-->
<div class="w3-container w3-theme w3-padding-32" id="myHeader">
    <div class="w3-center">
        <h1 class="w3-xxlarge">More help is available...</h1><br/><br/>
        <div class="w3-padding-32 w3-center">
            <a href="https://www.211.org" target="_blank"><img src="images/211-logo.svg" alt="211" style="width:150px; height:100px;"></a><br><br>
            <a href="http://kentmethodist.com/assistance" target="_blank"><img src="images/KentUMC-logo.png" alt="Kent Methodist" style="width:340px; height:130px;"></a><br><br>
         <!-- <button class="w3-button w3-xlarge w3-theme-light" onclick="location.href='http://kentmethodist.com/assistance'" style="font-weight:900;">Kent United Methodist Church</button> -->
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="w3-black w3-container w3-content w3-center w3-padding-32 band shadow-lg p-3 mb-3 bg-white rounded" style="height:100px;">
    <h2 class="w3-wide w3-center">CONTACT US</h2>
</div>

<!--
<div class="w3-container w3-content w3-padding-64" id="contact">
-->
    <div class="w3-row w3-padding-32 w3-center">
    <!--Contact Left Side-->
    <div class="w3-col m6 w3-large w3-margin-bottom">
        <!-- Google Map insertion-->
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
        <i class="fa fa-envelope contactFont"></i> Email:
        mail@mail.com<br/>
    </div>

    <!--Contact Right Side-->
    <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-calendar contactFont"></i>
        Monday: 1:00pm to 4:00pm<br/>
        Tuesday: 9:00am to 12:00 noon<br/>
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

</body>
</html>