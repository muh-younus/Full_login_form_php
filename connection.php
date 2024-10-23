<?php
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "dbyunus1"; 

// Create the connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
   
}
?>
