<?php

/* Script to manage database connections */
$servername = "database";  //Magic of Containers
//$servername = "127.0.0.1";
$username = "root";
$password = "cueh";
$dbname = "maindb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

 
