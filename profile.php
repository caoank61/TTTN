<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Trang Chủ</title>
            <link rel="stylesheet" type="text/css" href="style_formlogin.css">
        </head>
        <body>
            <h1> Xin Chào <?php echo $_SESSION['user_name']; ?></h1>
            <a href="logout.php">Đăng Xuất</a>
        </body>
    </html>
    <?php
}
else {
    header("Location: index.php");
}
