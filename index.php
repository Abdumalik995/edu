<?php 

	//1. Umumiy sozlash
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	//2.faylga ulanish
	define('ROOT', dirname(_FILE_));
	require_once(ROOT.'components/Router.php');
 ?>