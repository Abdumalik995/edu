<?php 

	//1. Umumiy sozlash
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	//2.faylga ulanish
	define('ROOT', dirname(__FILE__));
	//echo ROOT;
	require_once(ROOT.'/components/Router.php');

	// class asosida faylni chaqirish
	//require_once(ROOT.'/config/routes.php');
	$obyekt = new Router;
	//print_r($obyekt->routes);
	//print_r($_SERVER);
	//echo $obyekt->getURL();
	$obyekt->run();
	$a = $obyekt->routes;

	/*$qator = "web dasturlash";
	$shablon = "dastur";
	$result = preg_match("~$shablon~", $qator);
	var_dump($result);*/
 ?>