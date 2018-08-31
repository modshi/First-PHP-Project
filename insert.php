<?php

// when we want to add new data
if (isset( $_POST["insert"])) {

    $username = $_POST["title"];

    $email = $_POST["email"];

    $add = "INSERT INTO person (username, email) VALUES ('$username', '$email');";


    if(empty($username)) {
        echo "Username is empty!!";

    }
    if(empty($email)) {
        echo "Email is Empty!!";
    }
    else {

        mysqli_query($connectDB, $add);
        echo "<h1>DONE !</h1>";

    }
}


if ( isset( $_POST["display"] ) ) {

    $ss = "SELECT * FROM person WHERE username='$_POST[title]'";

    $result = mysqli_query( $connectDB, $ss );

    if (empty($_POST["title"])) {
        echo "Username is Empty!!";

    }
    else
        if ( ! $result ) { // Something wrong with the query.
            echo "<h1>No result object. Error in executing the query</h1>";
            echo '<p>Mysql Error: ' . mysqli_error( $connectDB ) . '</p>';

        } else { // query is ok. We check number of rows.
            $resultsCount = mysqli_num_rows( $result );



            if ( $resultsCount == 0 ) { // Nothing match the query
                echo '<h2>No results</h2>';
            }
            else {

                echo '<h2>Found: ' . $resultsCount . ' result(s) about: ' . $_POST['title'] . '</h2>';
                // Show the results.
                echo '<ul>';
                while ( $row = mysqli_fetch_assoc( $result ) ) {
                    echo '<p>' . $row['username'] . '</p>';
                    echo '<p>' . $row['email'] . '</p>';
                    echo '<p>' . $row['id'] . '</p>';
                }
                echo '</ul>';
            }




        }




}
