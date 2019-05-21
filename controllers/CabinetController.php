<?php 
    require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/models/User.php');
	require_once(ROOT.'/models/Cabinet.php');
	class CabinetController {
		public function actionIndex() {
			$menu = array();
			$menu = Content::getMenu();

			$dropdown1 = array();
			$dropdown1  = Content::DropdownMenu();
			
			
			
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
		/*=Newsni qayta yozish funksiyasi===*/
		public function actionEdit($id) {
			$edit = array();
			$edit = Cabinet::newsEdit($id);
			
			require_once(ROOT.'/views/admin/news/news_edit1.php');
			return true;

		}
		/*==News delete funksiyasi==*/
		public function actionDelete($id) {
			
			$deleted = Cabinet::newsDelete($id);
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
		public function actionCabinet() {

			require_once(ROOT.'/views/admin/news/news_edit.php');
			return true;

		}

		public function actionNews_insert() {

			if (isset($_POST['submit'])) {	

				function test_input($data) {
      				$data = trim($data);
      				$data = stripslashes($data);
      				$data = htmlspecialchars($data);
      				return $data;
    			}			
				//$categoriya = $_POST['categoriya'];
				$name_uz = test_input($_POST['name_uz']);
				$name_ru = test_input($_POST['name_ru']);
				$anons_uz = test_input($_POST['anons_uz']);
				$anons_ru = test_input($_POST['anons_ru']);
				$text_uz = test_input($_POST['text_uz']);
				$text_ru = test_input($_POST['text_ru']);
				
				$author = test_input($_POST['author']);
				$date_added = $_POST['vaqt'];
				
				 if(isset($_FILES['img']) and ($_FILES['img']['error'] == 0)) { 					
 					$img = $_FILES['img']['name']; 					
 					$papka = ROOT."/template/images/".$img; 					
 					$kesh = $_FILES['img']['tmp_name']; 					
 					move_uploaded_file($kesh, $papka);
 	
 					//agar fayl yuklangan bulsa
 					
 				}
				

				$kalit = Cabinet::insertNews($name_uz, $name_ru, $anons_uz, $anons_ru, $text_uz, $text_ru, $img, $author, $date_added);
				if ($kalit) {
					$i = 1;
					$news = array();
					$news = Cabinet::getnews();
					require_once(ROOT.'/views/admin/news/news.php');
				} else {
					echo "yo'q";
				}
			}

			require_once(ROOT.'/views/admin/news/news_edit.php');
			return true;

		}
		
	}
	
 ?>