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
        $dbname="CacHeQTCSDL";
      
        //tạo chuỗi kết hợp MySQL
        try{
        $conn=new PDO("sqlsrv:Server=$servername;Database=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Kết nối SQL server thành công";
        }
        catch (PDOException $e){
            echo "kết nối SQL server không thành công";
        }
       ?> 
        
</body>
</html>