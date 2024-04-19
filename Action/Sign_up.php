<?php
include_once '../db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fullname = $_POST['Full_Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if(empty($fullname) || empty($email) || empty($password) || empty($confirmPassword)){
        header('Location: ../Signup.php?error= All fields are required');
    } else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header('Location: ../Signup.php?error= Invalid email');
        }
    }



    if($password != $confirmPassword){
        header('Location: ../Signup.php?error= Password and Confirm Password do not match');
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (Full_Name, email, password) VALUES ('$fullname', '$email', '$password')";
        if($conn->query($sql) === TRUE){
            header('Location: ../login.php');
        } else {
            header('Location: ../register.php?error= Error while registering');
        }
    }
    $conn->close();
}
