<?php 
	return [
		'search' => 'search/index',
		'news/page-([0-9]+)'=>'news/index/$1',
		'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
		'news/([0-9]+)' => 'news/view/$1',
		'news' => 'news/index',
		'about' => 'about/view/$1',				
		'aloqa'=>'contacts/contacts',
		'main/([a-z]+)/([0-9]+)' => 'main/view/$1/$2',
		'main/([0-9]+)' => 'main/view/$1',
		'main'=>'main/index',
		'([a-z]+)/uz'=>'main/index',
		'uz'=>'main/index',
		'([a-z]+)/ru'=>'main/index',
		'ru'=>'main/index',		
		'user/login' => 'user/index',
		'user' => 'user/index',
		//'cabinet/news/([a-z]+)' => 'cabinet/news_edit',	
		'content/([0-9]+)'=>'content/content/$1',	
		'cabinet/edit/([a-z]+)' => 'cabinet/news_edit',		
		'cabinet/edit' => 'cabinet/view',
		'cabinet/news' => 'cabinet/news',
		'cabinet' => 'cabinet/index',
		'menues' => 'menues/index',
		''=>'main/index'		
	];
 ?>