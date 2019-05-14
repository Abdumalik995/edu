<?php 
	if (isset($_REQUEST['search'])) {
		$search = $_REQUEST['search'];
		//echo $search;

	}
	global $search;
	class Search {
		public static function searchList($search) {
			$lang = $_SESSION['lang'];
			global $search;
			$search = intval($search);
			
			$db = Db::getConnection();
			$searchs = array();
			$result = $db->query("SELECT * FROM news WHERE text_".$lang." LIKE '%".$search."%' ORDER BY id DESC");

			$i = 0;
			while($row = $result->fetch()) {
				$searchs[$i]['id'] = $row['id'];
				$searchs[$i]['text'] = $row['text_'.$lang];
				$searchs[$i]['anons'] = $row['anons_'.$lang];
				$searchs[$i]['img'] = $row['img'];
				$searchs[$i]['date_added'] = $row['date_added'];
				$searchs[$i]['author'] = $row['author'];
				$searchs[$i]['keyss'] = $row['keyss'];
				$searchs[$i]['tegs'] = $row['tegs'];
				$searchs[$i]['name'] = stripslashes($row['name_'.$lang]);				
				$i++;
			}
			/*echo "<pre>";
			print_r($searchs);*/
			return $searchs;
		}
		
	}
 ?>