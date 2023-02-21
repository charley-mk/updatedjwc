<?php
// Database credentials
$databaseHost = "localhost";
$databaseName = "jwccoke_main";
$databaseUser = "jwccoke_jwccoke";
$databasePassword = "CMK@9080123";

// Create a database connection
$conn = mysqli_connect($databaseHost, $databaseUser, $databasePassword, $databaseName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

// Close connection
mysqli_close($conn);
?>