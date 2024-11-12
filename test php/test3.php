<?php 
$a=30;
$b=70;
function mytest(){

    $GLOBALS['b']=$GLOBALS['a']+$GLOBALS['b'];
    static $c=0;
    echo $c."<br>";
    $c++;
    var_dump($GLOBALS['b']);
    
}
function teststring(){
    $Mobile=["nokia","samsung","mobilephone"];
    $a=null;
    var_dump($a);
    var_dump($Mobile);
    $name="Le Pham Quoc Viet";
    $text_1 = "Tên của tôi là $name";
	$text_2 = 'Tên của tôi là $name';
    echo str_word_count($name);
	echo $text_1;
	echo $text_2;
    $data = array("HTML", "CSS", "JavaScript", "MySQL", "PHP");
    foreach ($data as $value) {
        echo "<p>Lập Trình Web</p>";
    }
}
// mytest();
// mytest();
// mytest();
// echo $b;
teststring();
?>