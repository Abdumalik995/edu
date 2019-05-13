<?php 
	class News {
		public static function getNewsList($page) {
			$page = intval($page);
			$filtr = ($page-1)*2;
			//echo $filtr;
			$db = Db::getConnection();
			$newsList = array();
			$result = $db->query('SELECT * FROM news ORDER BY id LIMIT 2 OFFSET '.$filtr);

			$i = 0;
			while($row = $result->fetch()) {
				$newsList[$i]['id'] = $row['id'];
				$newsList[$i]['name'] = stripslashes($row['name']);
				$newsList[$i]['date_added'] = $row['date_added'];			
				$newsList[$i]['img'] = $row['img'];
				$newsList[$i]['author'] = $row['author'];
				$newsList[$i]['keyss'] = $row['keyss'];
				$i++;
			}
			/*echo "<pre>";
			print_r($newsList);*/
			return $newsList;
		}
		public static function getNews() {
			
			$db = Db::getConnection();
			$newsList = array();
			$result = $db->query('SELECT * FROM news ORDER BY date_added DESC LIMIT 4');

			$i = 0;
			while($row = $result->fetch()) {
				$newsL[$i]['id'] = $row['id'];
				$newsL[$i]['name'] = stripslashes($row['name']);
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
		
		public static function countNews() {
			$db = DB::getConnection();

			$result = $db->query("SELECT id, name, img, date_added, author, keyss FROM news where keyss = (SELECT MAX(keyss) FROM news);");
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$max = $result->fetch();
			return $max;
		}

		public static function navbar() {
			$db = DB::getConnection();
			$result = $db->query('SELECT count(id) AS count FROM news');
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$row = $result->fetch();
			return $row['count'];
		}

		public static function sahifa() {
			
			return true;

		}
	} 
 ?>