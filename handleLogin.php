<?php

     session_start();

    if(!isset($_SESSION['logged'])){
        header("location: login.php");
    }

    if(!isset($_POST['btnLogin'])){
        header('location:login.php');
    }
    else{
        require('./config.php');
        $email = mysqli_real_escape_string($conn, $_POST['email']) ;
        $password = mysqli_real_escape_string($conn, $_POST['password']) ;
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0){
            // $row = mysqli_fetch_assoc($result);
            // if(password_verify($password ,$row['password']) === 1){
            //     $_SESSION['email'] = $email;
            //     header('location:index.php');
            // }
            // else{
            //     header('location:login.php?error=user');
            // }

            while($row = mysqli_fetch_array($result)){
                if(password_verify($password, $row["password"])){
                    $_SESSION['email'] = $email;
                    header('location:after_login.php');
                }else{
                    header('location:login.php?error=user');
                }
            }
        }else{
            header('location:login.php?error=user');
        }
    }

    mysqli_close($conn);
?>