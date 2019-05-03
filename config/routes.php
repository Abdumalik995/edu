<?php 
	return [
		'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
		'news/([0-9]+)' => 'news/view',
		'news' => 'news/index',
		'about' => 'about/list',		
		'main'=>'main/index',
		''=>'main/index'
		
	];
 ?>