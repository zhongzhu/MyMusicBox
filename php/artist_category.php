<?php

$content = array(
	array('id'=>0,'text'=>'全部歌手'),
	array('id'=>1,'text'=>'华语男歌手'),
	array('id'=>2,'text'=>'华语女歌手'),
	array('id'=>3,'text'=>'华语乐队组合'),
	// array('id'=>4,'text'=>'欧美男歌手'),
	// array('id'=>5,'text'=>'欧美女歌手'),
	// array('id'=>6,'text'=>'欧美乐队组合'),
	// array('id'=>7,'text'=>'日韩男歌手'),
	// array('id'=>8,'text'=>'日韩女歌手'),
	// array('id'=>9,'text'=>'日韩乐队组合'),
	array('id'=>10,'text'=>'其他歌手')
);

//encoda para formato JSON
echo json_encode(array(
	"success" => true,
	"total" => 11,
	"data" => $content));
?>