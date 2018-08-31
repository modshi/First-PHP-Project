<?php

if (isset($_POST["submit"])){

    include_once 'db.inc.php';

    $userName   = mysqli_real_escape_string($connectDB, $_POST['username']);
    $firstName  = mysqli_real_escape_string($connectDB, $_POST['firstname']);
    $lastName   = mysqli_real_escape_string($connectDB, $_POST['lastname']);
    $email      = mysqli_real_escape_string($connectDB, $_POST['email']);
    $password   = mysqli_real_escape_string($connectDB, $_POST['pwd']);


    // ERROR:
    if (empty($userName) || empty($firstName) || empty($lastName) || empty($email) || empty($password) ) {

        header("Location: signup.php?signup=empty");
        exit();

    } else {
        // not allowed

            if(!preg_match('/^[A-Za-z0-9]+$/',$firstName) || (!preg_match('/^[A-Za-z0-9]+$/',$lastName))) {

            header("Location: signup.php?signup=faild");
            exit();

        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

                header("Location: signup.php?signup=EMAIL");
                exit();

            } else {
                $sql = "SELECT * FROM users WHERE user_name='$userName';";
                $result = mysqli_query($connectDB, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0){
                    header("Location: signup.php?signup=username");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (user_first, user_last, user_name, user_email, user_pwd) VALUES ('$firstName', '$lastName', '$userName', '$email', '$hashedPwd');";
                    mysqli_query($connectDB, $sql);
                    header("Location: signup.php?signup=OK");
                    exit();
                }
            }

        }

    }


} else {



}