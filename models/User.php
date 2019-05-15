<?php 
	class User {
		public static function tekshirish($user, $parol) {
			if((strlen($user) >= 4) and (strlen($parol)) >= 4) {
				return true;
			} 
			return false;
		}

	/*	public static function user_bazadan($user) {
			$db = Db::getConnection();
			$sql = 'SELECT COUNT(*) FROM user WHERE user = :user';
			//surovga obyektni ulaydi.
			$result = $db->prepare($sql);
			//parametrlarni result o`zgaruvchisiga ulash
			$result->bindParam(':user', $user, PDO::PARAM_STR);
			$result->exexute();
			//qatorlarni sonnini aniqlash;
			if($result->fetchColumn())
				return true;
			return false;
		}
		*/
		public static function avtorizatsiya($user, $parol) {
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
				return $natija['user'];
			}
			return false;
		}

		public static function auth($avtorizatsiya) {
			$_SESSION['user'] = $avtorizatsiya;
		}
	}
	
 ?>