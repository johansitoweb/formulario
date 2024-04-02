<?php 

// make mysql connection
$server = 'localhost';
$database = 'contact';
$user = 'root';
$password = '';

$conn = new mysqli( $server, $user, $password, $database );

// Check connection for errors

if ( $conn->connect_error ) {
    die( "Connection failed: " . $conn->connect_error );
}