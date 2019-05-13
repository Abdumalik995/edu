<?php 
	class News {
		public static function getNewsList() {
			$lang = $_SESSION['lang'];
			$db = Db::getConnection();
			$newsList = array();
			$result = $db->query("Select * from category");

			$i = 0;
			while($row = $result->fetch()) {
				$newsList[$i]['id'] = $row['id'];
				$newsList[$i]['name'] = stripslashes($row['name_'.$lang]);				
				$i++;
			}
			/*echo "<pre>";
			print_r($newsList);*/
			return $newsList;
		}
		
	}
 ?>