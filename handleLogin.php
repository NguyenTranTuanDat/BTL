<?php
    if(!isset($_POST['btnLogin'])){
        header('location:login.php');
    }
    else{
        require('./config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password ,$row['password']) === 1){
                $_SESSION['logged'] = $email;
                header('location:index.php');
            }
            else{
                header('location:login.php?error=user');
            }
        }else{
            header('location:login.php?error=user');
        }
    }

    mysqli_close($conn);
?>