<?php 
    require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/models/User.php');
	class UserController {
		public function actionIndex() {
			$menu_asosiy = array();
			$menu_asosiy = Content::menuAsosiy();

			/*$searchs = array();
			$searchs = Search::searchList();*/
			
			require_once(ROOT.'/views/user/user.php');
			return true;
		}
		/*public function actionView($id) {
			echo "<br> sahifani ko`rish";			
			echo "<br>",$id;
			return true;

		}*/
		
	}
	
 ?>