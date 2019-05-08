<?php 
	class Content {	
		//menyuni asosiylarini chiqarish
		public static function menuAsosiy() {
			$db = Db::getConnection();
			$menu = array();
			$result2 = $db->query("SELECT * FROM menu where active = 1 ORDER BY joylashuv asc");
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
			$result3 = $db->query("SELECT * FROM content ORDER BY id desc limit 2");
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

		public static function welcome() {
			$db = Db::getConnection();
			$result = $db ->query("SELECT * FROM content where id = 2");
			$result->setFetchmode(PDO::FETCH_ASSOC);
			$about = $result->fetch();
			return $about;
		}
		public static function seo() {
			$db = DB::getConnection();
			$seo = [];
			$result4 = $db->query('SELECT * FROM seo');
			$i =0;
			while($row4 = $result4->fetch()) {
				$seo[$i]['id'] = $row4['id'];	
				$seo[$i]['name'] = $row4['name'];				
				$seo[$i]['title'] = $row4['title'];	
				$seo[$i]['img'] = $row4['img'];	
				$seo[$i]['short_s'] = $row4['short_s'];	
				$seo[$i]['short_b'] = $row4['short_b'];	
				$seo[$i]['short_school'] = $row4['short_school'];	
				$seo[$i]['short_teacher'] = $row4['short-teacher'];	
				$seo[$i]['site_about'] = $row4['site_about'];	
				$i++;
			}
			 return $seo;
		}
	}
 ?>