<?php
session_start();//để các trang có thể sử dụng chung 1 sesion thì cần phải có câu lệnh này
//Phải bỏ ở phía trên cùng của mỗi trang(trên cả phần tử html)
$_SESSION['login']['username']='phancuong.qt';
// 
header('location:index.php')
?>