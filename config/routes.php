<?php 
	return [
		'search' => 'search/index',
		'news/page-([0-9]+)'=>'news/index/$1',
		'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
		'news/([0-9]+)' => 'news/view/$1',
		'news' => 'news/index',
		'about' => 'about/list',				
		'main'=>'main/index',
		'uz'=>'main/index',
		'ru'=>'main/index',
		''=>'main/index'
		
	];
 ?>