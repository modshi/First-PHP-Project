<html>

    <head>
        <title>
            Data Entry!
        </title>
    </head>
    <body>
        <form method="POST">

            Name: <input type="text" name="title" placeholder="Title" autofocus>
            <br/>
            E-Mail: <input type="text" name="email" placeholder="E-mail">
            <br/>
            <button type="submit" name="insert">GO!</button>
            <button type="submit" name="display">Display</button>
        </form>
    </body>
</html>
<?php

include_once "include/db.inc.php";
include_once "insert.php";

?>






