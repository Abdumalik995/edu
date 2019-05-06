<?php 
	require_once(ROOT.'/models/Content.php');
	class MainController {
		public function actionIndex() {
			
			//echo "<br>Categoriyalar";
			/*$menular = array();
			$menular = Content::getMenu();*/
			//echo "<pre>";
			//>>>print_r($menular);
			$menu_asosiy = array();
			$menu_asosiy = Content::menuAsosiy();
			//print_r($menu_asosiy);
			require_once(ROOT.'/views/main/index.php');
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