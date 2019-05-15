<?php 
    require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/models/User.php');
	class UserController {
		public function actionIndex() {
			$menu_asosiy = array();
			$menu_asosiy = Content::menuAsosiy();

			if(isset($_POST['submit'])) {
				//echo $_POST['user'].'<br>';
				//echo $_POST['parol'];
				$user = $_POST['user'];
				$parol = $_POST['parol'];

				//$users = array();
				$users = User::avtorizatsiya($user, $parol);

				//echo $users;
				if ($users) {
					header("Location: ".ROOT."/views/main/index.php");
				}

			}
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