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
			$i = 1;
			$news = array();
			$news = Cabinet::getnews();
			require_once(ROOT.'/views/admin/news/news.php');
			return true;

		}

		public function actionView() {

			require_once(ROOT.'/views/admin/news/news_edit.php');
			return true;

		}

		public function actionNews_edit() {

			if (isset($_POST['submit'])) {

				$lang = $_POST['lang'];
				$name = $_POST['ism'];
				$anons = $_POST['anons'];
				$text = $_POST['text'];
				$img = $_POST['img'];
				$author = $_POST['author'];
				$date_added = $_POST['vaqt'];
				
				$kalit = Cabinet::insertNews($name, $anons, $text, $img, $author, $date_added);
				if ($kalit) {
					echo "nnn";
				} else {
					echo "yo'q";
				}
			}

			require_once(ROOT.'/views/admin/news/news_edit.php');
			return true;

		}
		
	}
	
 ?>