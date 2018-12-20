<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 17.12.18
 * Time: 15:52
 */

namespace transport;
require_once 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | Make or dream come true</title>
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
<div class="container">
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form method="post" class="form-signin" action="index.php">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="hidden" name="action" value="registration">
            <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
            <input type="password" name="repeatPassword" class="form-control" placeholder="Repeat password" required>

            <button name="action" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
        </form><!-- /form -->
        <a href="#" class="forgot-password">
Already registered? Sign in!
        </a>
    </div><!-- /card-container -->
</div>


</body>
<?php
if(isset($_POST['action'])){
    Messenger::send(Messenger::getAction(), $_POST['email']);
}
