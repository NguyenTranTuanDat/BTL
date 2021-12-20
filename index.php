<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/reset.css" />
        <link rel="stylesheet" href="./css/header.css" />
        <link rel="stylesheet" href="./css/left-section.css" />
        <link rel="stylesheet" href="./css/right-section.css" />
        <link rel="stylesheet" href="./css/main.css" />
        <title>Document</title>
    </head>

    <body>
        <!-- Header -->
        <header class="component">
            <a href="index.html"><img src="./images/logo.svg" class="logo" /></a>
            <nav>
                <li><img src="./images/news.svg" /> Bảng tin</li>
                <li>
                    <img src="./images/experience.svg" class="icon" /> Trải
                    nghiệm
                </li>
                <li><img src="./images/tour.svg" class="icon" /> Tour</li>
                <li><img src="./images/hotel.svg" class="icon" /> Khách sạn</li>
                <li>
                    <img src="./images/flight.svg" class="icon" /> Vé máy bay
                </li>
                <li><img src="./images/car.svg" class="icon" /> Thuê xe</li>
                <li>
                    <img src="./images/shopping.svg" class="icon" /> Mua sắm
                </li>
            </nav>
            <div class="user-info">
                <img src="./images/cart.svg" class="icon" />
                <img src="./images/wallet.svg" class="icon" />
                <img src="./images/message.svg" />
                <img src="./images/user.svg" alt="" id="user" />
                <div class="setting component">
                    <li id="toggle-theme">
                        <img src="./images/darkmode.svg" class="icon" />
                        Chế độ tối
                    </li>
                    <li>
                        <img src="./images/log-out.svg" class="icon" />
                        Đăng xuất
                    </li>
                </div>
            </div>
        </header>

        <!-- Left Section -->
        <section class="left">
            <div class="user-section component">
                <ul>
                    <li class="user-item">
                        <img src="./images/coin.svg" class="icon" />0 Xu
                    </li>
                    <li class="user-item">
                        <img src="./images/note.svg" class="icon" />Sổ tay
                    </li>
                    <li class="user-item">
                        <img src="./images/coin-2.svg" class="icon" />Tài khoản
                        kinh doanh
                    </li>
                    <li class="user-item">
                        <img src="./images/wallet.svg" class="icon" />Tài khoản
                        thanh toán
                    </li>
                    <li class="user-item">
                        <img src="./images/share.svg" class="icon" />Tài khoản
                        bán hàng
                    </li>
                    <li class="user-item">
                        <img src="./images/friends.svg" class="icon" />Bạn bè
                    </li>
                    <li class="user-item">
                        <img src="./images/picture.svg" class="icon" />Hình ảnh
                    </li>
                    <li class="user-item">
                        <img src="./images/bookmarks.svg" class="icon" />
                        Bookmarks
                    </li>
                </ul>
            </div>
            <img src="./images/ads.jpg" />
            <div class="weather component">
                <h4>Salavan, LA</h4>
                <p class="weekday"></p>
                <div class="temp">
                    <img src="./images/weather.png" />
                    <span>
                        17&#8451;
                        <p>Bầu trời quang đãng</p>
                    </span>
                </div>
                <ul class="weather-info">
                    <li>
                        <span>Khoảng nhiệt</span>
                        17&#8451; - 17&#8451;
                    </li>
                    <li>
                        <span>Độ ẩm</span>
                        94%
                    </li>
                    <li>
                        <span>Áp suất</span>
                        1016hPa
                    </li>
                    <li>
                        <span>Tộc độ gió</span>
                        1.7m/s
                    </li>
                    <li>
                        <span>Khả năng mưa</span>
                        10%
                    </li>
                    <li>
                        <span>Tầm nhìn</span>
                        10Km
                    </li>
                    <li>
                        <span>Bình minh</span>
                        06:14 AM
                    </li>
                    <li>
                        <span>Hoàng hôn</span>
                        05:25 PM
                    </li>
                </ul>
            </div>
        </section>

        <!-- Main -->
        <main></main>

        <!-- Right Section -->
        <section class="right">
            <img src="./images/right-1.jpg" />
            <img src="./images/right-2.jpg" />
            <div class="featured component">
                <p class="title">
                    Trải nghiệm nổi bật
                    <span>Xem tất cả</span>
                </p>
                <hr />
                <div class="featured-details">
                    <div class="img-section">
                        <p>
                            Note ngay 4 Resort siêu ưu đãi cho kỳ du lịch cuối
                            năm
                        </p>
                    </div>
                    <div class="featured-detail">
                        <img src="./images/feature-logo.webp" />
                        <div>
                            <h4>SĂN VOUCHER CÙNG HAHALOLO</h4>
                            <span>4 ngày trước</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="certificate component">
                <img src="./images/certificate-1.png" />
                <img src="./images/certificate-2.png" />
                <img src="./images/certificate-3.png" />
            </div>
            <footer class="component">
                <ul>
                    <li>Giới thiệu</li>
                    <li>Quyền riêng tư</li>
                    <li>Điều khoản</li>
                    <li>Cookie</li>
                    <li>Tuyển dụng</li>
                    <li>Hỗ trợ</li>
                    <li>Tiếp thị liên kết</li>
                </ul>
                <p>© Hahalolo 2017. Đã đăng ký bản quyền</p>
            </footer>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>
