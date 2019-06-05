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

		public static function insertNews($name_uz, $name_ru, $anons_uz, $anons_ru, $text_uz, $text_ru, $img, $author, $date_added) {
			//$lang = $_SESSION['lang'];
			$db = Db::getConnection();
			//$newsList = array();
			$result = $db->query("INSERT INTO `news` (`name_uz`, `name_ru`, `anons_uz`, `anons_ru`, `text_uz`, `text_ru`, `img`, `author`, `date_added`) VALUES ('$name_uz', '$name_ru', '$anons_uz', '$anons_ru', '$text_uz', '$text_ru', '$img', '$author', '$date_added')");			
		
			return true;
		}

		public static function newsEdit($id) {
			$id = intval($id);			
			$db = Db::getConnection();			
			$result=$db->query("SELECT * FROM news WHERE id=$id");
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$row = $result->fetch();

			return $row;
		}

		
		public static function newsDelete($id) {
			$id = intval($id);			
			$db = Db::getConnection();			
			$result=$db->query("DELETE FROM news WHERE id=$id");
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$row = $result->fetch();

			return $row;
		}

		
	}
 ?>