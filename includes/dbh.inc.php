<?php
ob_start();

$servername ="localhost";
$dBUsername ="id8231108_terrell";
$dbPassword="qwerty";
$dbName="id8231108_loginsystem";


// Create connection
$conn = new mysqli($servername, $dBUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
ob_flush();
?>

    

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}