<?php

$conn = '';
// connect to database
require_once('connect-db.php');

?>

<!-- Display messages -->

<div>

<?php

    // Perform query
    $result = $conn -> query( "SELECT * FROM contacts" );

    // check if query returned any results
    if ( mysqli_num_rows( $result ) > 0 ) {

        // loop through the query results
        // mysqli_fetch_assoc function is an inbuilt php function which fetches query result as an associative array 
        echo "<ul>"; // i am using an unordered list to display the messages
        while( $row = mysqli_fetch_assoc( $result ) ) {
            echo "<li>";
            echo "Name: " . $row["cname"]. "<br>";
            echo "Message: " . $row["msg"]. "<br>";
            echo "</li>";
        }
        echo "</ul>";

     } else {
        echo "No messages found!";
     }
    
    // close the mysql connection
    $conn->close();

?>
  
</div>



