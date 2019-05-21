<?php 
	class Menu1{
		public static function getMenu(){
			$lang=$_SESSION['lang'];
			$db= Db::getConnection();
			$navigatsiya = array();
			$result1 = $db->query("SELECT * FROM navigatsiya");
			$i=0;
		while($row = $result1->fetch()){
			$navigatsiya[$i]['id'] = $row['id'];
			$navigatsiya[$i]['name'] = stripslashes($row['name_'.$lang]);
			$navigatsiya[$i]['url'] = $row['url'];
			$i++;

		}
		 return $navigatsiya;

		}
		public static function DropdownMenu(){
			$lang=$_SESSION['lang'];
			$db= Db::getConnection();
			$dropdown = array();
			$result1 = $db->query("SELECT * FROM dropdown");
			$i=0;
		while($row = $result1->fetch()){
			$dropdown[$i]['id'] = $row['id'];
			$dropdown[$i]['name'] = stripslashes($row['name_'.$lang]);
			$dropdown[$i]['nav_id'] = $row['nav_id'];
			$i++;

		}
		 return $dropdown;

		}
	}

 ?>