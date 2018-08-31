<?php

include_once "include/db.inc.php";


if (isset($_POST['post'])) {

    $title = strip_tags($_POST['title']);
    $content = strip_tags($_POST['content']);


    $title = mysqli_real_escape_string($connectDB, $title);
    $content = mysqli_real_escape_string($connectDB, $content);
    $date = date('l jS \of F Y h:i:s A');

    $sql = "INSERT INTO posts (post_title, content, date) VALUES ('$title','$content','$date');";


    if (empty($title) || empty($content)) {

        echo "empty";
        return;
    }

    mysqli_query($connectDB, $sql);

    echo "don!";
}
