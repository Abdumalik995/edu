<?php 
	class User {
		public static function avtrizatsiya($user, $parol) {
			$db = Db::getConnection();
			$sql = 'SELECT * FROM user WHERE user = :user and parol = :parol';

			//so`rovga obyektni ulaydi

			$result = $db->prepare($sql);
			//parametrlarni result o`zgaruvchisiga ulash

			$result->bindParam(':user', $user, PDO::PARAM_STR);
			$result->bindParam(':parol', $parol, PDO::PARAM_STR);
			$result->execute();
			$natija = $result->fetch();
			if($natija) {
				return $natija['id'];
			}
			return false;
		}

		public static function auth($avtorizatsiya) {
			$_SESSION['user'] = $avtorizatsiya;
		}
	}
	
 ?>