<?php 
	if (isset($_REQUEST['search'])) {
		$search = $_REQUEST['search'];
		//echo $search;

	}
	global $search;
	class Search {
		public static function searchList($search) {
			global $search;
			$search = intval($search);
			
			$db = Db::getConnection();
			$searchs = array();
			$result = $db->query("SELECT * FROM news WHERE anons LIKE '%".$search."%' ORDER BY id DESC");

			$i = 0;
			while($row = $result->fetch()) {
				$searchs[$i]['id'] = $row['id'];
				$searchs[$i]['text'] = $row['text'];
				$searchs[$i]['anons'] = $row['anons'];
				$searchs[$i]['img'] = $row['img'];
				$searchs[$i]['date_added'] = $row['date_added'];
				$searchs[$i]['author'] = $row['author'];
				$searchs[$i]['keyss'] = $row['keyss'];
				$searchs[$i]['tegs'] = $row['tegs'];
				$searchs[$i]['name'] = stripslashes($row['name']);				
				$i++;
			}
			/*echo "<pre>";
			print_r($searchs);*/
			return $searchs;
		}
		
	}
 ?>