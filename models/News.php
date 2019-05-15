<?php 
	class News {
		public static function getNewsList($page) {
			$page = intval($page);
			$filtr = ($page-1)*2;
			$lang = $_SESSION['lang'];
			//echo $filtr;
			$db = Db::getConnection();
			$newsList = array();
			$result = $db->query('SELECT * FROM news ORDER BY id LIMIT 2 OFFSET '.$filtr);

			$i = 0;
			while($row = $result->fetch()) {
				$newsList[$i]['id'] = $row['id'];
				$newsList[$i]['name'] = stripslashes($row['name_'.$lang]);
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
			$lang = $_SESSION['lang'];
			$db = Db::getConnection();
			$newsList = array();
			$result = $db->query('SELECT * FROM news ORDER BY date_added DESC LIMIT 4');

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
		
		public static function countNews() {
			$db = DB::getConnection();
			$lang = $_SESSION['lang'];
			$result = $db->query("SELECT id, name_".$lang." as name, img, date_added, author, keyss FROM news where keyss = (SELECT MAX(keyss) FROM news);");
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

		public static function taglar() {
			$db = DB::getConnection();
			$teg = array();
			$result = $db->query('SELECT tegs FROM news');
			$i = 0;
			while ($row = $result->fetch()) {
				$teg[$i]['tegs'] = trim($row['tegs']);
				$i++;
			}
			return $teg;
		}

		public static function NewsMore($id){
		 	$id=intval($id);
		 	$lang = $_SESSION['lang'];
		 	//echo $id;
			$db = Db::getConnection();
			$newsMore = array();
			$result = $db->query("SELECT * FROM news WHERE id = $id");
			$i=0;

			while($row = $result->fetch()){
				$newsMore[$i]['id'] = $row['id'];
				$newsMore[$i]['name'] = stripslashes($row['name_'.$lang]);
				$newsMore[$i]['text'] = stripcslashes($row['text_'.$lang]);
				$newsMore[$i]['author'] = stripcslashes($row['author']);
				$newsMore[$i]['tegs'] = stripcslashes($row['tegs']);
				$newsMore[$i]['img'] = stripcslashes($row['img']);
				$newsMore[$i]['date_added'] = $row['date_added'];
				
				//$i++;
				$newsMore[$i]['keyss'] = $row['keyss']+1;

				$i++;
				

			}
			$a = $newsMore['0']['keyss'];
			$b = $newsMore['0']['id'];

			$result1 = $db->query("UPDATE news SET keyss = '$a' WHERE id = '$b'");
			

			return $newsMore;
		}
	} 
 ?>