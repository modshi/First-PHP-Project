<?php

include_once 'include/functions.inc.php';
include_once "include/signup.inc.php";


get_header();

if (isset($_POST["submit"])){

    echo "welcome for you!";



} else {

    echo "no welcome sign up first!";
}




?>



<h2>Welcome!</h2>


<?php get_footer();?>