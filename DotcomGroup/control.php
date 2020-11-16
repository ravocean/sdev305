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
include("includes/head.html");
include("includes/creds.php");

?>

<!-- Beginning of the main body -->
<body>


<!--NAVBAR-->
<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
    <div class="container">
        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#myTogglerNav"
                aria-controls="myTogglerNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="index.php" class="navbar-brand">Kent Outreach</a>
        <div class="collapse navbar-collapse" id="myTogglerNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="index.php">Home</a>
                <a class="nav-item nav-link active" href="control.php">Admin Page</a>
            </div><!-- navbar -->
        </div>
    </div><!-- container -->
</nav><!-- nav -->

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
        <div class="band shadow-lg p-3 mb-5 bg-white rounded table-responsive">

            <table class="table display table-hover" id="user-table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Help List</th>
                    <th scope="col">Comments and Attachments</th>
                </tr>
                </thead>
                <tbody>

                <?php
                // Select column data from the database table
                $sql = "SELECT `ID`, `Date`, `First Name`, `Last Name`, `Phone`, `Email`, 
                        `Address`, `Adress 2`, `City`, `ZIP`, `Help List`, `Comments and Attachments` 
                        from outreach_form";

                $result = $conn->query($sql);
                // Database content must contain at least one row
                if ($result->num_rows > 0) {
                    // Print data while this condition is true
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["ID"]
                            . "</td><td>" . $row["Date"]
                            //. "</td><td>" . $row["FirstName"]." ".$row["LastName"]
                            . "</td><td>" . $row["First Name"]
                            . "</td><td>" . $row["Last Name"]
                            . "</td><td>" . $row["Phone"]
                            . "</td><td>" . $row["Email"]
                            . "</td><td>" . $row["Address"]." ".$row["Address 2"]." ".$row["City"].", ".$row["ZIP"]
                            . "</td><td>" . $row["Help List"]
                            . "</td><td>" . $row["Comments and Attachments"]
                            . "</td> </tr>";
                    }
                } else {
                    echo "0 Result";
                }
                ?>

                </tbody>
            </table>
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
<!-- jQuery Data Table -->
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>$('#user-table').DataTable();</script>
<script src="scripts/scripts.js"></script>
<script src="scripts/index.js"></script>
<script src="scripts/zipCode.js"></script>
</div>
</body>
</html>
