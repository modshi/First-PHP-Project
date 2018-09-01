<?php
require_once 'include/functions.inc.php';

get_header()


?>


<h1>home Page</h1>

<?php

$sql = 'SELECT * FROM posts ORDER BY id DESC';
$result = mysqli_query($connectDB, $sql);
$posts  = "";

if (!$result){
    echo mysqli_error($connectDB);
}
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


<?php include_once 'theme/footer.php';?>