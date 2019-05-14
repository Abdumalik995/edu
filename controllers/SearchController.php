<?php 
    require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/models/Search.php');
	class SearchController {
		public function actionIndex() {
			$menu_asosiy = array();
			$menu_asosiy = Content::menuAsosiy();

			$searchs = array();
			$searchs = Search::searchList();
			
			require_once(ROOT.'/views/search/search.php');
			return true;
		}
		public function actionView($id) {
			echo "<br> sahifani ko`rish";			
			echo "<br>",$id;
			return true;

		}
		
	}
	
 ?>