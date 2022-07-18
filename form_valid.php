<?php
session_start();
if(empty($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)){
        $_SESSION['error_email'] = "Please enter your email address";
        header("Location: ./index.php");
    }
    if(empty($password)){
        $_SESSION['error_password'] = "Please enter your password";
        header("Location: ./index.php");
    }
    if($email == "zabirraihan@gmail.com" and $password == "123456"){
        $_SESSION['success'] = "You are successfully log-in";
        header("Location: ./index.php");
    }
    if($email == "zabirraihan@gmail.com"){
        $_SESSION['valid_email'] = " Valid Email Address";
        header("Location: ./index.php");
    }else{
        $_SESSION['email_error'] = " In-valid Email Address";
        header("Location: ./index.php");
    }
    if($password == "123456"){
        $_SESSION['valid_password'] = " Vaild password";
        header("Location: ./index.php");
    }else{
        $_SESSION['password_error'] = " In-valid password";
        header("Location: ./index.php");
    }
}