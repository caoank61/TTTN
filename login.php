<?php
session_start();
include("db_TTTN.php");
if(isset($_POST['uname']) && isset($_POST['password'])) {
    //Kiem tra du lieu nhap vao
    function validate($data){
        //Loai bo cac ky tu khong hop le (khoang trang, \)
        $data = trim ($data); 
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    //Bao loi khi du lieu nhap vao rong
    if(empty($uname)){
        header("Location: index.php?error= Tên Đăng Nhập Không Được Để Trống!");
        exit();
    } else if (empty($pass)){
        header("Location: index.php?error= Mật Khẩu Không Được Để Trống!");
        exit();
    }
    $sql = "SELECT * FROM users WHERE user_name = '$uname'"; 
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['password'])){
            echo "Đăng Nhập Thành Công";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php"); //Chuyen huong sang home.php
            exit();
        } else {
            header("Location: index.php?error= Mật Khẩu Không Chính Xác!");
            exit();
        }
    } else {
        header("Location: index.php?error= Người Dùng Không Tồn Tại! Vui Lòng Kiểm Tra Lại Tên Đăng Nhập Và Mật Khẩu.");
        exit();
    }
}
