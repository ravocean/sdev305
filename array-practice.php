<?php

// turn on error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);

echo "<pre>";

echo "Indexed arrays: <br>";

$movies = array("Back to the Future", "Brave Heart", "Tron Legacy", "The Bodyguard");
$movies[] = "Wonder Woman";
var_dump($movies);

$shows[] = "The Office";
$shows[] = "The Boys";
$shows[] = "Parks and Rec";
var_dump($shows);

// Movies
echo "<ul>";
foreach ($movies as $movie) {
    echo "<li>$movie</li>";
}
echo "</ul>";

// Shows
echo "<ol>";
foreach ($shows as $show) {
    echo "<li>$show</li>";
}
echo "</ol>";

echo "</pre>";
