<?php 
    require_once(ROOT.'/models/Content.php');
	require_once(ROOT.'/models/User.php');
	class UserController {
		public function actionIndex() {
			$menu = array();
			$menu = Content::getMenu();

			$dropdown1 = array();
			$dropdown1  = Content::DropdownMenu();

			if(isset($_POST['submit'])) {
				
				$user = $_POST['user'];
				$parol = $_POST['parol'];

				$user1 = User::tekshirish($user, $parol);
				$users = User::avtorizatsiya($user, $parol);
				if ($user1 and $users) {
					header('Location: cabinet');
				}
				else {
					$_SESSION['error'] = 'parol yoki login xato';
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