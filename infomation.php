<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Information</title>
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style_info.css">
	<meta charset="UTF-8">
</head>
<body>
	<div class="main">
		<nav>
			<div class="logo">
				<img src="images/logo.png"><h2>Công Ty TNHH TMDV Kỹ Thuật Bằng Hữu</h2>
			</div>
			<div class="nav-links">
				<ul>
					<li><a href="home.php" id="homeBtn">Trang Chủ</a></li>
					<li><a href="product.php" id="productBtn">Sản Phẩm</a></li>
					<li><a href="infomation.php" id="infoBtn">Thông Tin</a></li>
					<li><a href="profile.php" id="loginBtn"><?php echo $_SESSION['user_name']; ?></a></li>
				</ul>
			</div>
		</nav>
		<div class="contact-container">
            <h2>Thông tin liên hệ</h2>
            <div class="company-info">
                <h3>Công Ty Trách Nhiệm Hữu Hạn Thương Mại Dịch Vụ Kỹ Thuật Bằng Hữu</h3>
                <p>Địa chỉ: 207/12 Đường Bạch Đằng, Bình Thạnh, Thành phố Hồ Chí Minh</p>
                <p>Email: TNHHBHCPN@gmail.com</p>
                <p>Phone: (+84)310179163</p>
                <div class="map">
                    <iframe
                        width="600"
                        height="450"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d742.533676244731!2d106.7068324493963!3d10.802438199735029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528bbca562991%3A0x6589a70c646a8e8d!2zMjA3LzEyIMSQLiBC4bqhY2ggxJDhurFuZywgUGjGsOG7nW5nIDE1LCBCw6xuaCBUaOG6oW5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1710999828643!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>           
                </div>
            </div>
	    </div>
    </div>
</body>
</html>
<?php
}
else {
    header("Location: index.php");
}