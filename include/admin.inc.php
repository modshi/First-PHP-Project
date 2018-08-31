<?php


if (isset($_SESSION['user_type']) == 1) {


} else {

    header('Location: index.php');
    exit();
}