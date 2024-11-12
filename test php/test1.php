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
        $num=123454534.24232;
        echo strlen("hello the world")."<br>";//đếm từng chữ trong chuỗi
        echo str_word_count("hello the world")."<br>";//đếm từ trong chuỗi
        echo strpos($stri,"page")."<br>";//tìm vị trí của từ trong chuỗi
        echo var_dump($stri);//in ra màn hình kiểu của giá trị
        echo str_replace("xin chao","go away",$str1)."<br>";//thay đổi chuỗi trong 1 chuỗi có trước
        echo number_format($num,5,",")."<br>";//hiển thị số thập phân theo
        echo print_r("hello");//in ra chuỗi và in ra thêm số 1
        echo print_r(explode(" ",$stri));//tách mảng theo kí tự
        echo print_r(str_split($stri,3))."<br>";//tách mảng theo số kí tự chỉ định
       
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
    ?>
</body>
</html>