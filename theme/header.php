<?php

session_start();

?>

<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../theme/style.css" media="screen" />
    </head>
    <body>
    <header>
        <nav class="main-header">
            <div class="wrap">
                <h1 class="title"><a href="index.php">Modshi</a></h1>
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
