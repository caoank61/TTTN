<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <meta charset="UTF-8">
</head>

<body>

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="Nhập tên đăng nhập"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Nhập mật khẩu"><br> 

        <button type="Đăng Nhập">Login</button>

     </form>

</body>

</html>