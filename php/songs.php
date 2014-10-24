<?php


$a1 = array(array('id'=>1, 'artist'=>'林子祥' , 'artist_id'=>1 , 'name'=>'男儿当自强' , 'url'=>''),
			array('id'=>2, 'artist'=>'林子祥' , 'artist_id'=>1 , 'name'=>'真的汉子' , 'url'=>''),
			array('id'=>3, 'artist'=>'林子祥' , 'artist_id'=>1 , 'name'=>'最爱是谁' , 'url'=>''));

$songs_id = 'a' . $_GET['id'];

//encoda para formato JSON
echo json_encode(array(
	"success" => true,
	"total" => count(${$songs_id}),
	"data" => ${$songs_id}));
?>