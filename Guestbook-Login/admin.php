<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION['loggedin'])) {
    // Store the page I'm curr on in the session
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    // Redirect to login
    header("location: login.php");
}

// Include header file
include('includes/head.html');
include("includes/cred.php");

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
                <a class="nav-item nav-link active" href="guestbook.php">Form Page</a>
                <a class="nav-item nav-link" target="_blank" href="clear.php">Clear</a>
            </div><!-- navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-item nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </div><!-- container -->
</nav><!-- nav -->

<!-- JUMBOTRON SECTION -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">My Guestbook | Admin</h1>
        <p class="lead">Let's connect and stay in touch! Please fill out the quick form below</p>
    </div>
</div>

<div class="container admin-cont">

    <div class="content pageStyle">
        <!-- The Application Form Section -->
        <!-- Paragraph representing what the Outreach program does -->
        <div class="w3-container w3-content w3-center w3-padding-64 band shadow-lg p-3 mb-5 bg-white rounded">

            <!-- Welcome Message -->
            <div class="text-center w3-container w3-content w3-center w3-padding-64" id="welcomeMessage">
                <h1>Control Page</h1>
            </div>
        </div>
    </div>
    <!--TABLE-->
        <div class="band shadow-lg p-3 mb-5 bg-white rounded table-responsive">

            <table class="table table-sm display table-hover" id="guestbook-table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Company</th>
                    <th scope="col">LinkedIn</th>
                    <th scope="col">Email</th>
                    <th scope="col">How Met</th>
                    <th scope="col">Message</th>
                    <th scope="col">Mail List</th>
                </tr>
                </thead>
                <?php
                // Select column data from the database table
                $sql = "SELECT `Date`, `FirstName`, `LastName`, `JobTitle`, `Company`, 
                        `LinkedIn`, `Email`, `HowMet`, `Message`, `MailList` from guestbook_form";

                $result = $conn->query($sql);
                // Database content must contain at least one row
                if ($result->num_rows > 0) {
                    // Print data while this condition is true
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["Date"]
                            . "</td><td>" . $row["FirstName"]
                            //. "</td><td>" . $row["FirstName"]." ".$row["LastName"]
                            . "</td><td>" . $row["LastName"]
                            . "</td><td>" . $row["JobTitle"]
                            . "</td><td>" . $row["Company"]
                            . "</td><td>" . $row["LinkedIn"]
                            . "</td><td>" . $row["Email"]
                            . "</td><td>" . $row["HowMet"]
                            . "</td><td>" . $row["Message"]
                            . "</td><td>" . $row["MailList"]
                            . "</td> </tr>";
                    }
                } else {
                    echo "0 Result";
                }
                ?>
            </table>
        </div>

</div>



<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<!-- jQuery Data Table -->
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>$('#guestbook-table').DataTable();</script>
<script src="scripts/scripts.js"></script>
<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>