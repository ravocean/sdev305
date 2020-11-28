<?php
// Connect to dataase
$database = "kkhomid1_grc";
$dbusername = "kkhomid1_grcuser";
$dbpassword = "GPTi5DFYdkSvS4a";
$hostname = "localhost";

// Login creds
$adminUser = "admin";
$adminPassword = "@dm1n";

$conn = @mysqli_connect($hostname, $dbusername, $dbpassword, $database)
or die("There was a problem");

// var_dump($cnxn);