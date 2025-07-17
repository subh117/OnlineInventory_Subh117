<?php

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$db = "onlineshop";


// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>



