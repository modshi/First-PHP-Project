<?php

require 'include/functions.inc.php';

get_header();
is_admin();

?>

<h2>Admin Page</h2>

<h3>Users:</h3>

<?php


$ss = "SELECT * FROM users";
$result = mysqli_query( $connectDB, $ss );
$resultsCount = mysqli_num_rows( $result );


        // Show the results.
        echo '<ul>';
        while ( $row = mysqli_fetch_assoc( $result ) ) {
            echo '<pre>';
            echo '<p>' . $row['user_name'] . '</p>';
            echo '<p>' . $row['user_email'] . '</p>';
            echo '<p>' . $row['user_id'] . '</p>';
        }
        echo '</ul>';


?>

<?php include_once 'theme/footer.php';?>
