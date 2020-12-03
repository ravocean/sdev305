<?php
?>

<!--
Author: Husrav Khomidov
Date: 12 December 2020
Directory: kkhomidov.greenriverdev.com/index.php
-->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Stylesheet-->
    <link rel="stylesheet" href="main/styles/styles.css">

    <!--Tab logo-->
    <link rel="icon" href="main/styles/galaxy.png" type="image/gif" sizes="16x16">
    <title>Husrav's Portfolio</title>

</head>
<body>
<!--Nav Start-->


<nav class="navbar navbar-dark site-header navbar-expand-sm">
    <div class="container">

        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#myTogglerNav"
                aria-controls="myTogglerNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="#">
            <img src="main/styles/galaxy.png" width="30" height="30" class="d-inline-block align-top mr-3" alt="">
            Husrav
        </a>
        <div class="collapse navbar-collapse" id="myTogglerNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Home</a>
            </div><!-- navbar -->
        </div>
    </div><!-- container -->
</nav><!-- nav -->


<div class="container mt-5">
    <!--Bio Banner Start-->
    <div class="site-banner jumbotron p-3 p-md-5 rounded text-white">
        <div class="col-md-6 px-0">
            <h1 class="display-4">Husrav Homidov</h1>
            <p class="lead my-3">I always had two big goals: move to America no matter what it takes;
                become a Software Developer. The first one was the most challenging I had to do, all alone, but done
                well.
                The second one is in progress with as successful results.</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">See below</a></p>
        </div>
    </div><!--Bio Banner End-->

    <hr class="featurette-divider">
    <section class="mb-5"> <!--Projects Section-->
        <!--Links Row 1-->
        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 mb-5">
            <div class="bg-links mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div>
                    <h3 class="display-6 text-uppercase">Kent Outreach</h3>
                    <p>Project for a non-profit organization helping people that need support</p>
                </div>
                <div class="bg-light box-shadow mx-auto"
                     style="width: 100%; height: 200px; border-radius: 18px 18px 0 0;">
                    <a href="http://dotcom.greenriverdev.com/" target="_blank" class="stretched-link">
                        <img src="main/images/outreach.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                    </a>
                </div>
            </div>

            <div class="bg-links mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div>
                    <h3 class="display-6 text-uppercase">Guestbook Form</h3>
                    <p>A form that takes user data and stores in database</p>
                </div>
                <div class="bg-light box-shadow mx-auto"
                     style="width: 100%; height: 200px; border-radius: 18px 18px 0 0;">
                    <a href="https://kkhomidov.greenriverdev.com/305/Guestbook/guestbook.php" target="_blank"
                       class="stretched-link">
                        <img src="main/images/guestbook.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                    </a>
                </div>
            </div>
            <div class="bg-links mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div>
                    <h3 class="display-6 text-uppercase">My resume</h3>
                    <p>My current resume on a web form</p>
                </div>
                <div class="bg-light box-shadow mx-auto"
                     style="width: 100%; height: 200px; border-radius: 18px 18px 0 0;">
                    <a href="http://kkhomidov.greenriverdev.com/305/Resume/" target="_blank"
                       class="stretched-link">
                        <img src="main/images/resume.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                    </a>
                </div>
            </div>
        </div> <!--Links Row 1 End-->

        <!--Links Row 2-->
        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            <div class="bg-links mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div>
                    <h3 class="display-6 text-uppercase">Alaskan Dumplings</h3>
                    <p>First small website project for a family owned restaurant in Washington.</p>
                </div>
                <div class="bg-light box-shadow mx-auto"
                     style="width: 100%; height: 200px; border-radius: 18px 18px 0 0;">
                    <a href="http://alaskandumpling.com/" target="_blank" class="stretched-link">
                        <img src="main/images/alaskan.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                    </a>
                </div>
            </div>

            <div class="bg-links mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div>
                    <h3 class="display-6 text-uppercase">Blackjack on Java</h3>
                    <p>Blackjack card game written on Java using streams, lambda expressions. This simple game runs on a
                        console</p>
                </div>
                <div class="bg-light box-shadow mx-auto"
                     style="width: 100%; height: 200px; border-radius: 18px 18px 0 0;">
                    <a href="https://github.com/ravocean/java" target="_blank" class="stretched-link">
                        <img src="main/images/blackjack.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                    </a>
                </div>
            </div>
            <div class="bg-links mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div>
                    <h3 class="display-6 text-uppercase">More on Github</h3>
                    <p>Check out my Github to see many more projects I work on</p>
                </div>
                <div class="bg-light box-shadow mx-auto"
                     style="width: 100%; height: 200px; border-radius: 18px 18px 0 0;">
                    <a href="https://github.com/ravocean/" target="_blank" class="stretched-link">
                        <img src="main/images/github.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                    </a>
                </div>
            </div>
        </div> <!--Links Row 2 End-->
    </section> <!--Projects Section End-->

</div>

<footer class="py-5 site-footer">
    <div class="container text-white">
        <!-- Footer Links -->
        <div class="text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-4 mx-auto">
                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Husrav Homidov</h5>
                    <p>Thank you for visiting my page and making it all the way to the bottom!</p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-2 mx-auto">
                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contacts</h5>
                    <ul class="list-unstyled text-white">
                        <li class="mb-2">
                            <a href="mailto:kkhomidov2@mail.greenriver.edu">kkhomidov2@mail.greenriver.edu</a>
                        </li>
                        <li class="mb-2">
                            <a href="https://github.com/ravocean" target="_blank">My Github</a>
                        </li>
                        <li class="mb-2">
                            <a href="https://www.linkedin.com/in/husrav/" target="_blank">LinkedIn</a>
                        </li>
                        <li class="mb-2">
                            <a href="https://kkhomidov.greenriverdev.com/305/Guestbook/admin.php" target="_blank">Guestbook
                                Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->
        <hr>
        <!-- Copyright -->
        <div class="footer-copyright text-center">2020 Green River Dev Student
        </div>
        <!-- Copyright -->

    </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script src="main/scripts/scripts.js"></script>
</body>
</html>
