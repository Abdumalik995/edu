<?php 
	class Content {
		public static function getMenu() {
			$db = Db::getConnection();
			$menuList = array();
			$result = $db->query("SELECT * FROM menu ORDER BY joylashuv asc");
			$i = 0;
			while($row = $result->fetch()) {
				$menuList[$i]['id'] =$row['id'];
				$menuList[$i]['name'] =$row['name'];
				$menuList[$i]['cat_id'] =$row['cat_id'];
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
				$menu[$i]['id'] = $row['id'];
				$menu[$i]['name'] = $row['name'];
				$i++;
			}
			return $menu;
		}
	}
 ?>