<?php
require("./user.php");
$user = new Users();
    
if (isset($_POST['submit'])) {
    $user->firstname($_POST['first_name']);
    $user->lastname($_POST['last_name']);
    $user->username($_POST['username']);
    $user->email($_POST['email']);
    $user->password(password_hash($_POST["password"], PASSWORD_DEFAULT));
    $user->regester();
    $user->login();
}

if (isset($_POST['passwords'])) {
    $user->username($_POST['username']);
    $user->email($_POST['email']);
    $user->password($_POST["password"]);
    $user->login();
}

if(isset($_POST["logout"])){
    $user->logout();
}





?>