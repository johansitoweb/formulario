<?php

// Make mysql connection 
require_once('connect-db.php');

// Create table to store information from contact form

$sql = "CREATE TABLE contacts (cname VARCHAR(50), email VARCHAR(50),
    phone VARCHAR(20), msg VARCHAR(750), website VARCHAR(50))";

if ( $conn->query( $sql ) === TRUE ) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
  
$conn->close();

