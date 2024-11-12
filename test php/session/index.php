<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>

<body>
    <?php
        if(isset($_SESSION['login']['username'])){
            ?>
            <a href="logout.php">Đăng xuất</a>
            <?php
        }else{
            ?>
            <a href="login.php">Đăng nhập</a>
            <?php
        }
    ?>
    <hr>
    <h1>Unitop.vn</h1>
    <a href="index.php">Trang chủ</a>
    <a href="course.php">Khóa học</a>
    <a href="account.php">Tài khoản</a>
    <hr>
    <p>Trang chủ</p>
    <?php
    if (isset($_SESSION['login']['username'])) {
        echo "xin chao " . $_SESSION['login']['username'];
    } else {
        echo "ban can dang nhap vao he thong <a href='login.php'>Tại đây</a>";
    }


    ?>

</body>

</html>