<?php 
$servername = "localhost"; 
$username   = "root"; 
$password   = ""; 
$database   = "feedbackdb"; 

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $database); 

// Check database connection
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 
?>