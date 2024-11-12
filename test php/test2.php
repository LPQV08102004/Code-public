<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $stri="file in page";
        $str1="xin chao moi nguoi";
        echo var_dump(is_int($stri))."<br>";
        $a1=array("a"=>1,"b"=>2);
        $a2=array("a"=>"1","b"=>"2");
        $a3=array("b"=>"2","a"=>"1");
        echo '$a1==$a2: ';
        var_dump($a1==$a2);
        echo "<br>";
        echo '$a1==$a3: ';
        var_dump($a1==$a3);
        echo "<br>";
        $arr=["green","blue","red","yellow","black"];
        $arr1=["SV1"=>"An","SV2"=>"Binh","SV3"=>"Long"];//tạo mảng có tên key và mỗi key có loại giá trị riêng
        var_dump($arr);
        echo "<br>";
        foreach($arr as $x){
            echo "the color:$x <br>";
        }
        foreach($arr1 as $x => $y){
            echo "Tên:$x=>$y <br> ";
        }
        function get_var($varname){
            global $$varname;
            var_dump( $$varname);
          }
          
          get_var('_POST');
          
    ?>
</body>
</html>