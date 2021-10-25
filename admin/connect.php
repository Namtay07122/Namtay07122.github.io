<?php
$host = 'localhost'; // 127.0.0.1
$user = 'root'; // User đăng nhập MySQL
$password = ''; // Password đăng nhập MySQL
$database = 'animu'; // Tên cơ sở dữ liệu
$connect = mysqli_connect($host, $user, $password, $database) or die('Not connect');
date_default_timezone_set("Asia/Bangkok"); // Thiết lập múi giờ chuẩn

?>