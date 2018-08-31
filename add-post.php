<?php


include_once "theme/header.php";
include_once "include/post.inc.php";
?>


<form action="add-post.php" method="post">

    <input type="text" name="title">
    <textarea name="content"></textarea>
    <button name="post" type="submit">Post it!</button>


</form>


<?php include_once "theme/footer.php";