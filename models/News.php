<?php 
	class News {
		public static function getNewsList() {
			$db = Db::getConnection();
			$newsList = array();
			$result = $db->query("Select * from content WHERE cat_id=1 order by date_added desc limit 3");

			$i = 0;
			while($row = $result->fetch()) {
				$newsList[$i]['id'] = $row['id'];
				$newsList[$i]['name'] = stripslashes($row['name']);
				$newsList[$i]['anons'] = stripslashes($row['anons']);
				$newsList[$i]['text'] = stripslashes($row['text']);
				$newsList[$i]['date_added'] = $row['date_added'];
				$i++;
			}
			/*echo "<pre>";
			print_r($newsList);*/
			return $newsList;
		}
		
	} 
 ?>