<?php

// User name should not be empty
if ( empty ($_POST["cname"] ) ) {  
    $err[] = "Enter your name";  
}

// User name should contain only alphabets and white space
if ( ! preg_match ( "/^[a-zA-z ]*$/", $_POST["cname"]) ) {  
    $err[] = "Only alphabets and whitespace are allowed in name.";               
}

// Email should be properly formatted.

$email = $_POST ["email"];  

$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

if ( ! preg_match ( $pattern, $email ) ) {  
    $err[] = "Enter a valid email";          
}

// Phone number is optional but should be a numeric value if entered.
if ( '' !== ( $phone = $_POST["phone"] ) )
if (  ! preg_match ("/^[0-9]*$/", $phone ) ){  
    $err[] = "Phone number accepts only numeric values.";  
} 

// Message should not be empty.
if ( empty ($_POST["msg"])) {  
    $err[] = "Enter a message";  
}

// Website url is optional but must have in valid format if entered.
if ( '' !== ( $website = $_POST["website"] ) )
if ( ! preg_match( "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website ) ) {  
    $err[] = "Website url is not valid";  
}

