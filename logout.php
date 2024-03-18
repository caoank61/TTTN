<?php
session_start();
session_unset(); //Gia phong cac bien
session_destroy(); //Giai phong du lieu phien lam viec hien ta
header("Location: index.php"); //Chuyen huong sang index