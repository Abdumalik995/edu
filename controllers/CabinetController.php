<?php 
    require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/models/User.php');
	class CabinetController {
		public function actionIndex() {
			$menu_asosiy = array();
			$menu_asosiy = Content::menuAsosiy();

			
			
			
			require_once(ROOT.'/views/cabinet/cabinet.php');
			return true;
		}
		/*public function actionView($id) {
			echo "<br> sahifani ko`rish";			
			echo "<br>",$id;
			return true;

		}*/
		
	}
	
 ?>