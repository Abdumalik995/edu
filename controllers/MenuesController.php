<?php 
    require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/models/News.php');
	class MenuesController {
		public function actionIndex() {
			$menu_asosiy = array();
			$menu_asosiy = Content::menuAsosiy();

			if (isset($_POST['submit'])) {
				$key = $_POST['key'];
				$kalit = Content::search($key);
			}
			$teg_soni = array();
			$teg_soni = News::taglar();
			
			require_once(ROOT.'/views/menues/menu.php');
			return true;
		}
		public function actionView($id) {
			echo "<br> sahifani ko`rish";			
			echo "<br>",$id;
			return true;

		}
		
	}
	
 ?>