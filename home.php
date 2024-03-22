<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Demo TTCM</title>
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
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
		<div class="information">
			<div class="overlay"></div>
			<img src="images/PA820.png" class="PA820">
			<h1>PA820</h1>
			<div id="circle">
				<div class="feature one">
					<img src="images/construction.png">
					<div> 
						<h1>Kiến trúc</h1>
						<p>Kiến trúc tiên tiến và mạnh mẽ</p>
					</div>
				</div>
				<div class="feature two">
					<img src="images/shield.png">
					<div>
						<h1>Tối ưu</h1>
						<p>Hỗ trợ cùng lúc nhiều mô hình triển khai</p>
					</div>
				</div>
				<div class="feature three">
					<img src="images/chip.png">
					<div>
						<h1>Chip xử lý chuyên dụng</h1>
						<p>Hiệu năng xử lý tốc độ cao với độ trễ thấp nhất</p>
					</div>
				</div>
				<div class="feature four">
					<img src="images/global-network.png">
					<div>
						<h1>Đơn giản hóa</h1>
						<p>Chỉ cần một thiết lập an ninh đồng nhất bao gồm toàn bộ các tác vụ</p>
					</div>
				</div>
			</div>
		</div>
		<div class="controls">
			<img src="images/arrow.png" id="upBtn">
			<h3>Features</h3>
			<img src="images/arrow.png" id="downBtn">
		</div>
	</div>
	<script>
		var circle = document.getElementById("circle");
		var upBtn = document.getElementById("upBtn");
		var downBtn = document.getElementById("downBtn");
		
		var rotateValue = circle.style.transform;
		var rotateSum;

		var circle = document.getElementById("circle");

        upBtn.onclick = function()
        {
	        rotateSum = rotateValue + "rotate(-90deg)";
	        circle.style.transform = rotateSum;
	        rotateValue = rotateSum;
        }

        downBtn.onclick = function()
        {
	        rotateSum = rotateValue + "rotate(90deg)";
	        circle.style.transform = rotateSum;
	        rotateValue = rotateSum;
        }

	</script>

</body>
</html>
<?php
}
else {
    header("Location: index.php");
}
