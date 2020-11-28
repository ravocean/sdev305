<!--
Author: Husrav Khomidov
Project: Portfolio Project: Guestbook Form
Date: 10/30/2020
-->

<?php
// turn on error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);



// Include header file
include ('includes/head.html');
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

    <div class="container-comp shadow-lg p-3 mb-5 bg-white rounded">

        <h3>Table has been cleared</h3>

    </div>

    <?php

    $sql = "DELETE FROM `guestbook_form`";


    $success = mysqli_query($conn, $sql);
    ?>

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