<?php 
	require_once(ROOT.'/models/News.php');
	class NewsController {
		public function actionIndex() {
			echo "<br>Yangiliklar ruyhati";
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
 ?>