<?php

//error_reporting(0);

$siteName = 'Modshi Site';
$hostName   = 'localhost';
$dbName     = 'data';
$dbUser     = 'root';
$dbPassWord = '';
define('SITE_URI', 'http://sandbox.test/');
define('SITE_NAME', 'MODSHI');

$connectDB = mysqli_connect($hostName,$dbUser,$dbPassWord,$dbName);


if (!$connectDB) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}


