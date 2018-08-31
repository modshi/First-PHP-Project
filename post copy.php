<?php

include_once 'include/db.inc.php';
include_once 'theme/header.php';

$sql = 'SELECT * FROM posts ORDER BY id DESC';
$result = mysqli_query($connectDB, $sql);
$posts  = "";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['post_title'];
        $content = $row['content'];
        $date = $row['date'];

        $admin = "";

        $posts .= "<div><h2><a href='view-post.php?pid=$id'>$title</a></h2><h3>$date</h3><p>$content</p></div>";


    }
    echo $posts;
} else {
    echo "no POSTS!";
}



?>

<?php include_once 'theme/footer.php'; ?>
