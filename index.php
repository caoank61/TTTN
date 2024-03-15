<!DOCTYPE html>
<html>
<head>
    <title>BÁO CÁO THỰC TẬP CHUYÊN MÔN: ỨNG DỤNG PHP TẠO TRANG ĐĂNG NHẬP ĐƠN GIẢN</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
        <h2>LOGIN</h2>
        //Kiểm tra trong URL có lỗi hay không
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Tên Đăng Nhập</label>
        <input type="text" name="username" placeholder="Nhập Tên Đăng Nhập"><br>
        <label>Mật Khẩu</label>
        <input type="password" name="password" placeholder="Nhập Mật Khẩu"><br> 
        <button type="submit">Đăng Nhập</button>
     </form>
</body>
</html>