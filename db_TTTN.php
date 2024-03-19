<?php
    $sname = "localhost";
    $unmae = "root";
    $password = "";
    $db_name = "info_db";
    $conn = mysqli_connect("$sname","$unmae","$password","$db_name");
    if(!$conn){
        echo"Kết nối không thành công";
    }