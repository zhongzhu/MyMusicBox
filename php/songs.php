<?php


$a1 = array(array('id'=>1, 'artist'=>'林子祥' , 'artist_id'=>1 , 'name'=>'男儿当自强' , 'url'=>'mp3/男儿当自强.mp3'),
			array('id'=>2, 'artist'=>'林子祥' , 'artist_id'=>1 , 'name'=>'真的汉子' , 'url'=>'mp3/真的汉子.mp3'),
			array('id'=>3, 'artist'=>'林子祥' , 'artist_id'=>1 , 'name'=>'最爱是谁' , 'url'=>'mp3/最爱是谁.mp3'));

$a2 = array(array('id'=>4, 'artist'=>'周深' , 'artist_id'=>2 , 'name'=>'贝加尔湖畔' , 'url'=>'mp3/贝加尔湖畔.mp3'));
$a4 = array(array('id'=>5, 'artist'=>'郑心慈' , 'artist_id'=>4 , 'name'=>'身骑白马' , 'url'=>'mp3/身骑白马.mp3'));
$a5 = array(array('id'=>6, 'artist'=>'张碧晨' , 'artist_id'=>5 , 'name'=>'时间都去哪儿了' , 'url'=>'mp3/时间都去哪儿了.mp3'));
$a6 = array(array('id'=>7, 'artist'=>'陈永馨' , 'artist_id'=>6 , 'name'=>'我' , 'url'=>'mp3/我.mp3'));

$songs_id = 'a' . $_GET['id'];

//encoda para formato JSON
echo json_encode(array(
	"success" => true,
	"total" => count(${$songs_id}),
	"data" => ${$songs_id}));
?>