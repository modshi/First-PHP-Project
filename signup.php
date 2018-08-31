<?php include_once 'theme/header.php';

include_once "include/signup.inc.php";

if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

?>


<h2>Signup</h2>
<p>Fill this form and click on signup!</p>


<form method="post">
    <input type="text" name="username" placeholder="User Name">
    <input type="text" name="firstname" placeholder="First Name">
    <input type="text" name="lastname" placeholder="Last Name">
    <input type="text" name="email" placeholder="E-mail">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Sign up</button>
</form>


<?php include_once 'theme/footer.php';?>
