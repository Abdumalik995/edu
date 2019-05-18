<?php 
    require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/models/User.php');
	require_once(ROOT.'/models/Cabinet.php');
	class CabinetController {
		public function actionIndex() {
			$menu_asosiy = array();
			$menu_asosiy = Content::menuAsosiy();

			
			
			
			require_once(ROOT.'/views/admin/index.php');
			return true;
		}
		public function actionNews() {
			
			$news = array();
			$news = Cabinet::getnews();
			require_once(ROOT.'/views/admin/news/news.php');
			return true;

		}

		public function actionView() {
			
			require_once(ROOT.'/views/admin/news/news_edit.php');
			return true;

		}
		
	}
	
 ?>