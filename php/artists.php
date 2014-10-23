<?php

$a1 = array(array('id'=>1, 'name'=>'林子祥' , 'artistcategory_id'=>1),
			array('id'=>2, 'name'=>'周华健' , 'artistcategory_id'=>1),
			array('id'=>3, 'name'=>'刘欢' , 'artistcategory_id'=>1));

$a2 = array(array('id'=>4, 'name'=>'王菲' , 'artistcategory_id'=>2),
			array('id'=>5, 'name'=>'那英' , 'artistcategory_id'=>2),
			array('id'=>6, 'name'=>'刘若英' , 'artistcategory_id'=>2));

$a3 = array(array('id'=>7, 'name'=>'玖月奇迹' , 'artistcategory_id'=>3),
			array('id'=>8, 'name'=>'黑鸭子' , 'artistcategory_id'=>3),
			array('id'=>9, 'name'=>'凤凰传奇' , 'artistcategory_id'=>3));

$a4 = array(array('id'=>10, 'name'=>'贝多芬' , 'artistcategory_id'=>4),
			array('id'=>11, 'name'=>'肖邦' , 'artistcategory_id'=>4),
			array('id'=>12, 'name'=>'迈克尔·杰克逊' , 'artistcategory_id'=>4));

$a5 = array(array('id'=>13, 'name'=>'席琳·迪翁' , 'artistcategory_id'=>5),
			array('id'=>14, 'name'=>'布兰妮' , 'artistcategory_id'=>5),
			array('id'=>15, 'name'=>'麦当娜' , 'artistcategory_id'=>5));

$a6 = array(array('id'=>16, 'name'=>'披头士乐队' , 'artistcategory_id'=>6),
			array('id'=>17, 'name'=>'老鹰乐队' , 'artistcategory_id'=>6),
			array('id'=>18, 'name'=>'滚石乐队' , 'artistcategory_id'=>6));

$a7 = array(array('id'=>19, 'name'=>'安七炫' , 'artistcategory_id'=>7),
			array('id'=>20, 'name'=>'安在旭' , 'artistcategory_id'=>7),
			array('id'=>21, 'name'=>'黄永灿' , 'artistcategory_id'=>7));

$a8 = array(array('id'=>22, 'name'=>'李秀英' , 'artistcategory_id'=>8),
			array('id'=>23, 'name'=>'酒井法子' , 'artistcategory_id'=>8),
			array('id'=>24, 'name'=>'张娜拉' , 'artistcategory_id'=>8));

$a9 = array(array('id'=>25, 'name'=>'少女时代' , 'artistcategory_id'=>9),
			array('id'=>26, 'name'=>'EXILE' , 'artistcategory_id'=>9),
			array('id'=>27, 'name'=>'东方神起' , 'artistcategory_id'=>9));

$a10 = array(array('id'=>28, 'name'=>'Academy of St. Martin-in-the-Fields' , 'artistcategory_id'=>10),
			array('id'=>29, 'name'=>'阿拉坦其其格扎格达苏荣' , 'artistcategory_id'=>10),
			array('id'=>30, 'name'=>'阿廖' , 'artistcategory_id'=>10));

$a0 = array_merge($a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10);

$artistcategory_id = 'a' . $_GET['id'];
// echo $artistcategory_id;
// print_r(${$artistcategory_id});
// echo "<br>";
// echo count(${$artistcategory_id});

//encoda para formato JSON
echo json_encode(array(
	"success" => true,
	"total" => count(${$artistcategory_id}),
	"data" => ${$artistcategory_id}));
?>