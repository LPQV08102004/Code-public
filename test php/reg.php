<?php
require 'db/connect.php';
if (isset($_POST['btn-reg'])) { //Hàm kiểm tra xem hàm post dã có dữ liệu bấm submit chưa
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    if (!empty($username) && !empty($fullname) && !empty($password) && !empty($email) && !empty($address) && !empty($gender)) {
        // echo "<pre>";
        // print_r($_POST);
        //insert dữ liệu
        $sql="INSERT INTO `tbl-user`(`fullname`,`username`,`password`,`email`,`address`,`gender`)VALUE('$fullname','$username',md5($password),'$email','$address','$gender')";
        if($conn->query($sql)===true) {
            echo "Nhập dữ liệu thành công";
        }else{
            echo"Lỗi {$sql}".$conn->error;
        }
    } else {
        echo "Bạn cần nhập đầy đủ thông tin trước khi submit";
    }
}

?>
<a href="index.php">Quay lại trang đăng ký</a>
