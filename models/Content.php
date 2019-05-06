<?php 
	class Content {	
		//menyuni asosiylarini chiqarish
		public static function menuAsosiy() {
			$db = Db::getConnection();
			$menu = array();
			$result2 = $db->query("SELECT * FROM menu ORDER BY joylashuv asc");
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

		public static function menuNews() {
			$db = DB::getConnection();
			$news = [];
			$result3 = $db->query("SELECT * FROM content ORDER BY id desc limit 4");
			$i = 0;
			while($row3 = $result3->fetch()) {
				$news[$i]['id'] = $row3['id'];
				$news[$i]['name'] = stripslashes($row3['name']);
				$news[$i]['anons'] = stripslashes($row3['anons']);
				$news[$i]['text'] = stripslashes($row3['text']);
				$news[$i]['cat_id'] = $row3['cat_id'];
				$i++;
			}
			return $news;
		}
	}
 ?>