<?php

?>
    <div class="user-control">

<form action="../include/logout.inc.php" method="post">
    <button type="submit" name="submit">sign out!</button>
</form>



<?php if (isset($_SESSION['user_type']) == 1) {

    echo "You Are Admin ! <a href='../admin.php'>Admin</a>";


} else {
    echo 'Welcome';
}

?>
</div>