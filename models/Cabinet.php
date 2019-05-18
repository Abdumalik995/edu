<?php 
	class Cabinet {
		public static function getNews() {
			$lang = $_SESSION['lang'];
			$db = Db::getConnection();
			$newsList = array();
			$result = $db->query('SELECT * FROM news ORDER BY date_added DESC');

			$i = 0;
			while($row = $result->fetch()) {
				$newsL[$i]['id'] = $row['id'];
				$newsL[$i]['name'] = stripslashes($row['name_'.$lang]);
				$newsL[$i]['date_added'] = $row['date_added'];			
				$newsL[$i]['img'] = $row['img'];
				$newsL[$i]['author'] = $row['author'];
				$newsL[$i]['keyss'] = $row['keyss'];
				$i++;
			}
			/*echo "<pre>";
			print_r($newsL);*/
			return $newsL;
		}
	}
 ?>