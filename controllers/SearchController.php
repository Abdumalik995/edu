<?php 
	require_once(ROOT.'/models/Search.php');
	class SearchController {
		public function actionIndex() {
			
			$search = array();
			$search = Search::searchList();
			echo "<pre>";
			print_r($news);
			echo "<pre>";
			return true;
		}
		public function actionView($id) {
			echo "<br> sahifani ko`rish";			
			echo "<br>",$id;
			return true;

		}
		
	}
	
 ?>