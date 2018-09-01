<?php


include_once 'db.inc.php';

// Get the header!
function get_header() {
    include_once 'theme/header.php';
}

// Get the footer!
function get_footer() {
    include_once 'theme/footer.php';
}


//// Get the head!
//function get_head() {
//    require 'db.inc.php';
//    echo "<title>$siteName</title>";
//}


// Check if the user is Admin
function is_admin() {
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1) {

        echo "<h1>Welcome You must be MR. " . $_SESSION['user_name'] . "</h1>";

    } elseif(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 2) {
        echo 'Your 2';
    } else {
        header('Location: 405.php');
        exit();
    }
}

?>
