<?php

$servername = "localhost";
$username = "root";
$password = "whatisthis";
$dbname = "rs";

// Create connection
$con = mysqli_connect($servername, $username, $password)or die("Unable to Connect"); 
mysqli_select_db($con,$dbname);

?>