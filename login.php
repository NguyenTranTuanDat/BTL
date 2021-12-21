<?php
    // session_start();
    // if(!isset($_SESSION['logged'])){
    //     header('location:login.php');
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/reset.css" />
        <link rel="stylesheet" href="./css/register.css" />
        <title>Đăng nhập| Hahalolo</title>
    </head>
    <body>
        <main>
            <div class="overview">
                <div class="logo">
                    <img src="./images/logo.svg" alt="logo" />
                    <p class="logo-name">Hahalolo</p>
                </div>
                <p class="question">Bạn thích</p>
                <p class="question-large">đi du lịch?</p>
                <p class="question question-small">
                    Bạn muốn tìm hiểu thông tin về những điểm đến?
                </p>
                <p class="answer">
                    Chỉ với vài thao tác, hãy nhanh chóng đăng nhập để trải
                    nghiệm và cảm nhận các tiện ích tuyệt vời của chúng tôi.
                </p>
            </div>
            <form action="handleLogin.php" method="post">
                <h4>Đăng nhập</h4>
                <input type="text" placeholder="Email" required name="email"/>
                <input type="password" placeholder="Mật khẩu" required name="password"/>
                <?php
                    if(isset($_GET['error'])){
                        echo '<span class="error">Email hoặc mật khẩu không đúng</span>';
                    }
                ?>
                <button type="submit" class="btn" name="btnLogin">Đăng nhập</button>
                <p class="policy"><span>Quên mật khẩu?</span></p>
                <p class="sign-in">
                    Bạn chưa có tài khoản?
                    <a href="register.php">Đăng ký tại đây!</a>
                </p>
            </form>
        </main>
    </body>
</html>