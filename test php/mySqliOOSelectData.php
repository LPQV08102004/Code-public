<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "classicmodels";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "Kết nối server không thành công: " . $conn->connect_error;
    } else {
        echo "Kết nối thành công";
        $sql = "SELECT * FROM office";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Số dòng: " . $result->num_rows;
            // Xử lý dữ liệu ở đây
        } else {
            echo "Không có dữ liệu trong bảng 'office'";
        }
    }
?>