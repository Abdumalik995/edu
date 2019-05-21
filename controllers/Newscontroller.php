<?php 
	require_once(ROOT.'/models/News.php');
	require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/components/Pagination.php');
	class NewsController {
		public function actionIndex($page = 1) {
			//echo "<br>Yangiliklar ruyhati";
			$news = array();
			$news = News::getNewsList($page);
			
			$menu = array();
			$menu = Content::getMenu();

			$dropdown1 = array();
			$dropdown1  = Content::DropdownMenu();
			/*echo "<pre>";
			print_r($news);
			echo "</pre>";*/
			$teglar = array();
			$teglar = News::taglar();
			//sahifalar soniga ulanish
			$total = News::navbar();
			$pagination = new Pagination($total, $page, 2, 'page-');
			require_once(ROOT.'/views/news/news.php');
			return true;
		}

		
		public function actionView($string, $id) {
			//echo "<br> sahifani ko`rish";
			$menu_asosiy = array();
			$menu_asosiy = Content::menuAsosiy();

			$newsmore = array();
			$newsmore = News::NewsMore($id);
			//echo "<br>",$id;
			require_once(ROOT.'/views/news/newsmore.php');
			return true;

		}
		
		public static function sahifa() {

		}
	}
	/*$obj = new News;
	$obj->getNewsList();*/
 ?>