<?php
// Connect to dataase
$database = "kkhomid1_grc";
$username = "kkhomid1_grcuser";
$password = "GPTi5DFYdkSvS4a";
$hostname = "localhost";

$conn = @mysqli_connect($hostname, $username, $password, $database)
or die("There was a problem");

// var_dump($cnxn);