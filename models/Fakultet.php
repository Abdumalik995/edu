<?php 
	class Fakultet{
		public static function fakultetlar($id){
			$id=intval($id);
			$db = Db::getConnection();
			$result=$db->query("SELECT * FROM fakultet WHERE dropdown_id=$id");
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$row = $result->fetch();



			return $row;
		}
		public static function kafedralar($id){
			$id=intval($id);
			$db = Db::getConnection();
			$result=$db->query("SELECT * FROM kafedra WHERE fak_id = $id");
			$i=0;
			while($row = $result->fetch()){
			$row1[$i]['id'] = $row['id'];
			$row1[$i]['name'] = stripslashes($row['name']);
			$i++;

		}
			
			return $row1;
		}

	}


 ?>