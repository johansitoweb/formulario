<?php // this script will process and insert form data to database.

// Make database connection

require_once('connect-db.php');

// check if form is submitted

if ( isset( $_POST['submitted'] ) ) 
{

    $err= []; // array variable to store validation errors

    require_once('validation.php');
    // Print out validation errors (if any)

    if (  count( $err ) > 0 ) {
        foreach( $err as $e ) {
            echo "<p>$e</p>";
        }
    }

    else {

        $cname = $_POST['cname'] ? $_POST['cname'] : '';
        $email = $_POST['email'] ? $_POST['email'] : '';
        $phone = $_POST['phone'] ? $_POST['phone'] : '';
        $msg = $_POST['msg'] ? $_POST['msg'] : '';
        $website = $_POST['website'] ? $_POST['website'] : '';

        $query = "INSERT INTO contacts (cname, email, phone, msg, website) VALUES(
            '$cname',
            '$email',
            '$phone',
            '$msg',
            '$website'
        )";

        // $conn is the connection object obtained from database connection script above

        if ( $conn->query( $query ) === TRUE ) {
            echo "Message stored successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        
        $conn->close();

    }
    

}