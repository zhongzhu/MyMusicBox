<?php

$a1 = array(array('id'=>1, 'name'=>'林子祥' , 'artistcategory_id'=>1),
			array('id'=>2, 'name'=>'周深' , 'artistcategory_id'=>1));

$a2 = array(array('id'=>4, 'name'=>'郑心慈' , 'artistcategory_id'=>2),
			array('id'=>5, 'name'=>'张碧晨' , 'artistcategory_id'=>2),
			array('id'=>6, 'name'=>'陈永馨' , 'artistcategory_id'=>2));

$a0 = array_merge($a1, $a2);

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