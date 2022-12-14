<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in</title>

    <link 
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
        rel="stylesheet" 
    />

    <link rel="stylesheet" href="style/reset.css" />
    <link rel="stylesheet" href="style/style.css" />
</head>
<body>
<?php
    include 'admincp/modules/config.php';
    session_start();
	if (isset($_POST['dangnhap'])) {
		$ten_tai_khoan = $_POST['account'];
		$mat_khau = $_POST['password'];
		$sql = mysqli_query($conn, "SELECT * FROM khachhang WHERE TaiKhoan = '$ten_tai_khoan' AND MatKhau = '$mat_khau' LIMIT 1");

        $row  = mysqli_fetch_array($sql);
        if(is_array($row))
        { 
            // $_SESSION['dangnhap'] =$row['HoTenKH']; 
            $_SESSION['dangnhap'] =$row['TaiKhoan']; 
            header('location:index.php?xem=giohang#cart');
        }else {
            echo "<script>alert('Tài khoản hoặc mật khẩu sai!!!');</script>";
        }
	}
?>
<div class="wrapper">
    <header class="login-header">
        <div class="container login-header__inner">
            <div class="login-header__item">
                <ul>
                    <li><a href="index.php"><img src="image/logo.svg" alt="image" /><p>Mi VietNam</p></a></li>
                    <li>Đăng nhập</li>
                </ul>
            </div>
            <div class="login-header__item">
                <a href="#">Cần trợ giúp?</a>
            </div>
        </div>
    </header>

    <main class="login-main">
        <div class="container login-main__inner">
            <div class="login-main__logo">
                <img src="image/logo.png" alt="image" />
                <h1>Xiaomi</h1>
                <p><span>Nền tảng thương mại điện tử</span> hàng đầu ở Đông Nam Á và Đài Loan</p>
            </div>
            <div class="login-main__form">
                <form action="" method="POST" enctype="multipart/form-date" class="form" id="form-1" onsubmit="return login()">
                    <p class="heading">Đăng nhập tài khoản</p>
                    <p class="desc">Chúc bạn mua sắm vui vẻ ❤</p>
                    <div class="spacer"></div>
                    <div class="form-group">
                        <label for="account" class="form-label">Tên tài khoản</label>
                        <input type="text" name="account" id="account" placeholder="VD: Nguyễn Văn A" class="form-control" />
                        <span class="form-message" id="account_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" class="form-control" />
                        <span class="form-message" id="password_error"></span>
                    </div>
                    <input type="submit" name="dangnhap" value="Đăng Nhập" class="form-submit" />
                    <p class="notice">Nếu bạn chưa có tài khoản - <a href="signup.php">Đăng ký</a></p>
                </form>
            </div>
        </div>
    </main>

       <section class="footer">
        <div class="container footer__inner">
            <div class="footer__item">
                <p class="footer__item-title">Tìm hiểu thêm</p>
            </div>
            <div class="footer__item">
                <p class="footer__item-title">Hỗ trợ</p>
                <a href="" target="_blank" class="footer__item-link">Bảo hành</a>
                <a href="" target="_blank" class="footer__item-link">Mua hàng</a>
                <a href="" target="_blank" class="footer__item-link">Trung tâm Dịch vụ</a>
                <a href="" target="_blank" class="footer__item-link">Hướng dẫn sử dụng</a>
            </div>
            <div class="footer__item">
                <p class="footer__item-title">Giới thiệu</p>
                <a href="https://www.mi.com/vn/about/" target="_blank" class="footer__item-link">Xiaomi</a>
                <a href="https://privacy.mi.com/all/vi_VN/" target="_blank" class="footer__item-link">Chính sách Riêng tư</a>
                <a href="https://integrity.mi.com/global#process" target="_blank" class="footer__item-link">Toàn vẹn & Tuân thủ</a>
            </div>
            <div class="footer__item">
                <p class="footer__item-title">Liên hệ</p>
                <a href="https://www.facebook.com/xiaomivietnam/" target="_blank" class="footer__item-link">Facebook</a>
            </div>
        </div>
    </section>

    <footer class="source">
        <div class="container source__inner">
            <div class="source__item">
                <a href="#" target="_blank" class="source__item-name">NTQ</a>
                
            </div>
            <div class="source__item">
                <p class="source__item-copyright">Copyright © 2010 - 2022 Xiaomi. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</div>
<script src="js/form-validation.js"></script>

</body>
</html>