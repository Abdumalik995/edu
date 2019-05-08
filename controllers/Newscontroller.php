<?php 
	require_once(ROOT.'/models/News.php');
	require_once(ROOT.'/models/Content.php');
	class NewsController {
		public function actionIndex() {
			//echo "<br>Yangiliklar ruyhati";
			$news = array();
			$news = News::getNewsList();
			$menu_asosiy = array();
			$menu_asosiy = Content::menuAsosiy();
			/*echo "<pre>";
			print_r($news);
			echo "</pre>";*/
			require_once(ROOT.'/views/news/news.php');
			return true;
		}
		public function actionView($id) {
			echo "<br> sahifani ko`rish";
			
			echo "<br>",$id;
			return true;

		}
		
		public static function sahifa() {

		}
	}
	/*$obj = new News;
	$obj->getNewsList();*/
 ?>