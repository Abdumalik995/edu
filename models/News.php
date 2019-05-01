<?php 
	class News {
		public static function getNewsList() {
			$db = Db::getConnection();
			$newsList = array();
			$result = $db->query("Select * from content WHERE about='Yangiliklar' order by datee desc limit 4");

			$i = 0;
			while($row = $result->fetch()) {
				$newsList[$i]['id'] = $row['id'];
				$newsList[$i]['name'] = stripslashes($row['name']);
				$newsList[$i]['datee'] = $row['datee'];
				$newsList[$i]['about'] = $row['about'];
				$newsList[$i]['anonss'] = stripslashes($row['anonss']);
				$i++;
			}
			/*echo "<pre>";
			print_r($newsList);*/
			return $newsList;
		}
		
	}
 ?>