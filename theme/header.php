<?php
include_once 'include/functions.inc.php';

session_start();

?>

<html>
    <head>
        <title><?php echo SITE_NAME?></title>
        <link rel="stylesheet" type="text/css" href="theme/style.css" media="screen" />
    </head>
    <body>
    <header>
        <nav class="main-header">
            <div class="wrap">
                <h1 class="title"><a href="<?php echo SITE_URI?>"><?php echo SITE_NAME?></a></h1>
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        include_once "theme/logout.php";
                    } else {
                        include_once "theme/login.php";
                    }
                    ?>
            </div>
        </nav>
    </header>
    <main>
        <div class="wrap">
