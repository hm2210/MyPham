<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "my_pham";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Đóng kết nối
?>