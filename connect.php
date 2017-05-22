<?php
$host = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($host, $username, $password);

// Check connection
if ($conn < 1) {
    echo "database error";
} 
//echo "Connected successfully";*/
?>