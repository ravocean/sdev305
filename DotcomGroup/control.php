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

<div class="container">

    <div class="w3-content pageStyle">
        <!-- The Application Form Section -->
        <!-- Paragraph representing what the Outreach program does -->
        <div class="w3-container w3-content w3-center w3-padding-64 band shadow-lg p-3 mb-5 bg-white rounded">

            <!-- Welcome Message -->
            <div class="w3-container w3-content w3-center w3-padding-64" id="welcomeMessage">
                <h1>Control Page</h1>
            </div>
        </div>
    </div>

    <!--TABLE-->
    <div class="w3-content pageStyle">
        <div class="w3-container w3-content w3-center w3-padding-64 band shadow-lg p-3 mb-5 bg-white rounded">

        <table class="table display" id="order-table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Message/File</th>
                <th scope="col">Needs Help With</th>
            </tr>
            </thead>


            <tbody>
            <tr>
                <th scope="row">Mark Zuckerberg</th>
                <td>253-554-5555 <br> mark@nosebook.com</td>
                <td>4254 Bookface Dr, Zuckland, CA, 99004</td>
                <td>Come back to Facebook</td>
                <td>Moving TikTokers to Reels</td>
            </tr>
            <tr>
                <th scope="row">Tim Cook</th>
                <td>452-554-5555 <br> timmy@aaple.com</td>
                <td>7441 Farmers Blvd, Cookland, CA, 99014</td>
                <td>Another year - another iPhone</td>
                <td>iPhone chargers</td>
            </tr>
            <tr>
                <th scope="row">Bill Gates</th>
                <td>441-554-5555 <br> doors@billy.com</td>
                <td>777 Dicks Burger St, Seattle, WA, 99011</td>
                <td>5G doesn't cause the virus</td>
                <td>Clean water</td>
            </tr>
            </tbody>
        </table>
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
