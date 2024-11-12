<?php
session_start();
//cập nhập username:phancuong.qt => unitop.vn
$_SESSION['login']['username']='unitop.vn';
echo $_SESSION['login']['username'];
?>