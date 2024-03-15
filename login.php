<?php
session_start();
include("db.php");
if(isset($_POST['username']) && isset($_POST['password'])) {
    //Kiem tra du lieu nhap vao
    function validate($data){
        //Loai bo cac ky tu khong hop le (khoang trang, \)
        $data = trim ($data); 
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    //Bao loi khi du lieu nhap vao rong
    if(empty($username) || empty($password)){
        header("Location: index.php?error= Tên Đăng Nhập Hoặc Mật Khẩu Không Được Để Trống!");
        exit();
    }
}
$sql = "SELECT * FROM users WHERE user_name= '$username' AND password = '$password'"; 
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)===1){
    $row = mysqli_fetch_assoc($result);
    if($row['user_name']== $username && $row['password'] === $password){
        echo "Đăng Nhập Thành Công";
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php"); //Chuyen huong sang home.php
        exit();
    }
    else {
        header("Location: index.php?error= Người Dùng Không Tồn Tại! Vui Lòng Kiểm Tra Lại Tên Đăng Nhập Và Mật Khẩu.");
        exit();
    }
}
else {
    header("Location: index.php"); //Chuyen huong ve index.php
    exit();
}