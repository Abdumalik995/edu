<?php 
	require_once(ROOT.'/models/Main.php');
	class MainController {
		public function actionIndex() {
			echo "<br>Categoriyalar";
			$news = array();
			$news = News::getNewsList();
			echo "<pre>";
			print_r($news);
			return true;
		}
		
		public function actionView($categoriya, $id) {
			echo "<br> sahifani ko`rish";
			echo "<br>",$categoriya;
			echo "<br>",$id;
			return true;

		}
		
	}
	/*$obj = new News;
	$obj->getNewsList();*/
	//require_once(ROOT.'/views/main/index.php');

	/*function __construct($row) {
			$this->id = $row['id'];
			$this->name = $row['name'];
			
		}*/
 ?>