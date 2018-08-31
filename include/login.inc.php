<?php

session_start();


if (isset($_POST["login"])) {

    include 'db.inc.php';

    $username = mysqli_real_escape_string($connectDB, $_POST['username']);
    $password = mysqli_real_escape_string($connectDB, $_POST['pwd']);


    if (empty($username) || empty($password)) {

        echo "empty";
    } else {

        $sql = "SELECT * FROM users WHERE user_name='$username'";
        $result = mysqli_query($connectDB, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck < 1) {
            echo "no user";

        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                $hashedPwd = password_verify($password, $row['user_pwd']);
                if ($hashedPwd == false) {
                    echo "pass wrong!";
                } elseif ($hashedPwd == true) {

                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['user_first'] = $row['user_first'];
                    $_SESSION['user_last'] = $row['user_last'];
                    $_SESSION['user_email'] = $row['user_email'];
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['user_type'] = $row['user_type'];
                    header ('Location: ../index.php');
                    exit();
                }

            }
        }

    }

} else {

    header ('Location: ../index.php');
    exit();

}