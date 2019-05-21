<?php 
    require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/models/News.php');
	class SearchController {
		public function actionIndex() {
			$menu = array();
			$menu = Content::getMenu();

			$dropdown1 = array();
			$dropdown1  = Content::DropdownMenu();

			if (isset($_POST['submit'])) {
				$key = $_POST['key'];
				$kalit = Content::search($key);
			}
			$teg_soni = array();
			$teg_soni = News::taglar();
			
			require_once(ROOT.'/views/content/search.php');
			return true;
		}
		public function actionView($id) {
			echo "<br> sahifani ko`rish";			
			echo "<br>",$id;
			return true;

		}
		
	}
	
 ?>