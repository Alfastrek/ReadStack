<?php
// Retrieve database connection details from environment variables
$dbHost = getenv('AZURE_MYSQL_HOST');
$dbUser = getenv('AZURE_MYSQL_USERNAME');
$dbPass = getenv('AZURE_MYSQL_PASSWORD');
$dbName = getenv('AZURE_MYSQL_DBNAME');
$dbPort = getenv('AZURE_MYSQL_PORT'); // Optional, if you need to specify a port

// Create connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName, $dbPort);

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>
