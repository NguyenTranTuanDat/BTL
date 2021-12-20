

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/reset.css" />
        <link rel="stylesheet" href="./css/register.css" />
        <title>Document</title>
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
            <form method="POST" action="handleRegister.php">
                <h4>Đăng ký</h4>
                <div class="full-name">
                    <input
                        type="text"
                        placeholder="Tên"
                        required
                        name="firstName"
                    />
                    <input
                        type="text"
                        placeholder="Họ"
                        required
                        name="lastName"
                    />
                </div>
                <input type="email" placeholder="Email" required name="email" />
                <?php
                    if(isset($_GET['error'])){
                        echo '<span class="error">Email này đã được sử dụng</span>';
                    }
                ?>
                <input
                    type="password"
                    placeholder="Mật khẩu"
                    id="pw"
                    required
                    name="password"
                    minlength="8"
                />
                <input
                    type="password"
                    placeholder="Xác nhận mật khẩu"
                    required
                    name="rePassword"
                    id="confirm-pw"
                />
                <span class="error" id="error-pw">Mật khẩu không khớp</span>
                <button class="btn" name="btnSignUp" id="btnSignUp">
                    Đăng ký
                </button>
                <p class="policy">
                    Bằng cách nhấp vào Đăng ký, bạn đồng ý với
                    <span>Điều khoản dịch vụ</span>,
                    <span>Chính sách dữ liệu</span>,
                    <span>Chính sách cookie</span> và
                    <span>Tiêu chuẩn cộng đồng</span>
                    của chúng tôi
                </p>
                <p class="sign-in">
                    Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a>
                </p>
            </form>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>
