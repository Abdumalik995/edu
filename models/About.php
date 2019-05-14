<?php 
	class About {
		public static function AboutMore($id){
		 		$id=intval($id);
		 		//echo $id;
			$db = Db::getConnection();
			$events = array();
			$result = $db->query("SELECT * FROM events WHERE id = $id");
			$i=0;

		while($row = $result->fetch()){
				$lang = $_SESSION['lang'];
				$events[$i]['id'] = $row['id'];
				$events[$i]['name'] = stripslashes($row['name_'.$lang]);
				$events[$i]['anons'] = stripcslashes($row['anons_'.$lang]);
				$events[$i]['text'] = stripcslashes($row['text_'.$lang]);
				$events[$i]['img'] = stripcslashes($row['img']);
				$events[$i]['datee'] = $row['datee'];
				$events[$i]['keyss'] = $row['keyss'];
				$events[$i]['tegs'] = $row['tegs'];

		
				$i++;

		}
		return $events;
	}
	}
 ?>