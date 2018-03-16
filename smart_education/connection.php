<?php
$servername = "sql106.unaux.com";
$username = "unaux_21793266";
$password = "ayny0omoyz94r";
$dbname = "unaux_21793266_se";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
