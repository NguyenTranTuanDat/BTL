<?php

session_start();

if(!isset($_SESSION['logged'])){
    header("location: login.php");
}

    require('./config.php');

    if(!isset($_POST['btnSignUp'])){
        header('location:register.php');
        return;
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];

    // Handle register
    $sqlSelect = "SELECT * FROM users WHERE email = '$email'  ";
    $isExisted = mysqli_query($conn, $sqlSelect);

    if(mysqli_num_rows($isExisted) > 0){
        header("location:register.php?error=email");
    }else{
        $pwHash = password_hash($password, PASSWORD_DEFAULT);
        $sqlInsert = "INSERT INTO users(firstName, lastName, email, password)
                VALUES ('$firstName', '$lastName', '$email', '$pwHash')";
        $result = mysqli_query($conn, $sqlInsert);

        if($result == true){
            header('location:login.php');
        }else{
            header('location:register.php');
        }
    }

    mysqli_close($conn);
?>