<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start session
session_start();

//var_dump($_POST);

// Initialize variables
$err = false;
$username = "";

//If the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo "Form has been submitted";

    //Get the username and password
    $username = strtolower(trim($_POST['username']));
    $password = trim($_POST['password']);

    //If they are correct
    //Actual username and password are stored in a separate file
    //Should be moved to home directory ABOVE public_html
    require ('includes/cred.php');

    if ($username == $adminUser && $password == $adminPassword) {

        $_SESSION['loggedin'] = true;

        //Redirect to page the user was on
        if (!isset($_SESSION['page'])) {
            $_SESSION['page'] = 'admin.php';
        }
        header("location: " . $_SESSION['page']);

    }

    //Set an error flag
    $err = true;
}
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

        <a href="" class="navbar-brand">Husrav Khomidov</a>
        <div class="collapse navbar-collapse" id="myTogglerNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="guestbook.php">Home</a>
                <a class="nav-item nav-link" href="admin.php">Admin Page</a>
            </div><!-- navbar -->
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-item nav-link active" href="login.php">Login Page</a>
            </li>
        </ul>
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

        <form class="needs-validation" novalidate action="#" method="POST">
            <!-- CONTACT INFO GROUPING -->
            <div class="">
                <legend>Login</legend>
                <!-- Username -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required <?php echo "value='$username'" ?>>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <?php
                if ($err){
                    echo '<div class="alert alert-danger" role="alert">
                          <strong>Wrong username or password</strong>
                        </div>';
                }
                ?>

            <hr class="my-4 rgba-white-light">


            <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>

    </div>


</section>

<!-- JS Validation-->
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