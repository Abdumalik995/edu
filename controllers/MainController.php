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
			$page = $_SESSION['lang'];
			$menu_asosiy = array();
			$menu_asosiy = Content::menuAsosiy();
			//print_r($menu_asosiy);
			$news = array();
			$news = Content::menuNews();
			//print_r($news);
			/**/
			$welcome_main = Content::welcome();

			$seos = array();
			$seos = Content::seo();
			/*news blockdagi malumotlar uchun*/
			$news_block = array();
			$news_block = News::getNews();
			/*Eng kup uqilgan malumot uchun*/
			$max_news = News::countNews();
			require_once(ROOT.'/views/main/index.php');
			return true;
		}
		
		/*public function actionView($id) {
			echo "<br> sahifani ko`rish";
			
			echo "<br>",$id;
			return true;

		}*/
		
	}
	/*$obj = new News;
	$obj->getNewsList();*/
	//require_once(ROOT.'/views/main/index.php');

	/*function __construct($row) {
			$this->id = $row['id'];
			$this->name = $row['name'];
			
		}*/
 ?>