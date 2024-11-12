<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
        $servername="localhost";
        $username="root";
        $password="";
      
        //tạo chuỗi kết hợp MySQL
        $conn=new mysqli($servername,$username,$password);
        if($conn->connect_error){
            die("kết nối không thành công: $conn->connect_error");
        }
        echo("kết nối thành công");
    ?>
</body>
</html>