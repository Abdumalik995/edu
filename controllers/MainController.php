<?php 
	require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/models/News.php');
	class MainController {
		public function actionIndex() {
			
			//echo "<br>Categoriyalar";
			/*$menular = array();
			$menular = Content::getMenu();*/
			//echo "<pre>";
			//>>>print_r($menular);
			//$page = $_SESSION['lang'];
			$menu = array();
			$menu = Content::getMenu();

			$dropdown1 = array();
			$dropdown1  = Content::DropdownMenu();
			//print_r($menu_asosiy);
			$news = array();
			$news = Content::menuNews();
			//print_r($news);
			/**/
			$welcome_main = Content::welcome();

			$seos = array();
			$seos = Content::seo();

			$events=array();
			$events= Content::Events();

			$it=array();
			$it = Content::It();
			/*news blockdagi malumotlar uchun*/
			$news_block = array();
			$news_block = News::getNews();
			/*Eng kup uqilgan malumot uchun*/
			$max_news = News::countNews();

			require_once(ROOT.'/views/main/index.php');
			return true;
		}
		
		public function actionView($string, $id) {
			//echo "<br> sahifani ko`rish";
			$menu = array();
			$menu = Content::getMenu();

			$dropdown1 = array();
			$dropdown1  = Content::DropdownMenu();

			$welcome_main = Content::welcome($id);
			//echo "<br>",$id;
			//require_once(ROOT.'/views/news/aboutnews.php');
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