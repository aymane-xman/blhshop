<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
    if($conn->query($sql)){
        header("Location: login.php");
    }
}
?>

<form method="POST">
    <input name="username" placeholder="Username">
    <input name="email" placeholder="Email">
    <input name="password" type="password" placeholder="Password">
    <button type="submit">Sign up</button>
</form>
