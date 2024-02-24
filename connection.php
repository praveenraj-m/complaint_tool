<?php
// Establish database connection
$servername = "localhost";
$username   = "root"; // Your MySQL username
$password   = ""; // Your MySQL password
$dbname     = "complaint_tool"; // Your MySQL database name
$conn       = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
