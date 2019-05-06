<?php 
	class Content {	
		//menyuni asosiylarini chiqarish
		public static function menuAsosiy() {
			$db = Db::getConnection();
			$menu = array();
			$result2 = $db -> query("SELECT * FROM menu ORDER BY joylashuv asc");
			$i = 0;
			while($row = $result2->fetch()) {
				$menu[$row['id']] = [
					'name' => $row['name'],
					'parent_id' => $row['parent_id']
				];
				$menu[$row['id']]['sub_menu'] = [];
				
			}

			foreach($menu as $key => $value) {
				if($value['parent_id']) {
					$menu[$value['parent_id']]['sub_menu'][] = $value;
					unset($menu[$key]);
				}
			}
			return $menu;
		}
	}
 ?>