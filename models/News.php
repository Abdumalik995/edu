<?php 
	class News {
		public static function getNewsList() {
			$db = Db::getConnection();
			$newsList = array();
			$result = $db->query("SELECT * FROM news ORDER BY date_added DESC LIMIT 4");

			$i = 0;
			while($row = $result->fetch()) {
				$newsList[$i]['id'] = $row['id'];
				$newsList[$i]['name'] = stripslashes($row['name']);
				$newsList[$i]['date_added'] = $row['date_added'];			
				$newsList[$i]['img'] = $row['img'];
				$i++;
			}
			/*echo "<pre>";
			print_r($newsList);*/
			return $newsList;
		}
		
		public static function countNews() {
			$db = DB::getConnection();

			$result = $db->query("SELECT id, name, img, date_added, author, keyss FROM news where keyss = (SELECT MAX(keyss) FROM news);");
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$max = $result->fetch();
			return $max;
		}
	} 
 ?>