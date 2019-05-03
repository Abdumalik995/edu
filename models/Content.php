<?php 
	class Content {
		public static function getMenu() {
			$db = Db::getConnection();
			$menuList = array();
			$result = $db->query("Select * fro type_content where ");
			$i = 0;
			while($row = $result->fetch()) {
				$menuList[$i]['id'] =$row['id'];
				$menuList[$i]['asosiy'] =$row['asosiy'];
				$menuList[$i]['menu'] =$row['menu'];
				$i++;
			}
			return $menuList;
		}
		//menyuni asosiylarini chiqarish
		public static function menuAsosiy() {
			$db = Db::getConnection();
			$menu = array();
			$result2 = $db -> query("Select * from category");
			$i = 0;
			while($row = $result2->fetch()) {
				$menu[$i] = $row['id'];
				$menu[$i] = $row['name'];
				$i++;
			}
			return $menu;
		}
	}
 ?>