<?php 
	$lang = $_SESSION['lang'];
	
	class Content {	
		//menyuni asosiylarini chiqarish
		public static function menuAsosiy() {
			$lang = $_SESSION['lang'];
			$db = Db::getConnection();
			$menu = array();
			$result2 = $db->query("SELECT * FROM menu where active = 1 ORDER BY joylashuv asc");
			$i = 0;
			while($row = $result2->fetch()) {
				$menu[$row['id']] = [
					'name' => $row['name_'.$lang],					
					'adress' => $row['urli'],					
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
			$lang = $_SESSION['lang'];
			$db = DB::getConnection();
			$news = [];
			$result3 = $db->query("SELECT * FROM content ORDER BY id desc limit 2");
			$i = 0;
			while($row3 = $result3->fetch()) {
				$news[$i]['id'] = $row3['id'];
				$news[$i]['name'] = stripslashes($row3['name_'.$lang]);
				$news[$i]['anons'] = stripslashes($row3['anons_'.$lang]);
				$news[$i]['text'] = stripslashes($row3['text_'.$lang]);
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
			$lang = $_SESSION['lang'];
			$db = DB::getConnection();
			$seo = [];
			$result4 = $db->query('SELECT * FROM seo');
			$i =0;
			while($row4 = $result4->fetch()) {
				$seo[$i]['id'] = $row4['id'];	
				$seo[$i]['name'] = $row4['name_'.$lang];				
				$seo[$i]['title'] = $row4['title_'.$lang];	
				$seo[$i]['img'] = $row4['img'];	
				$seo[$i]['short_s'] = $row4['short_s'];	
				$seo[$i]['short_b'] = $row4['short_b'];	
				$seo[$i]['short_school'] = $row4['short_school'];	
				$seo[$i]['short_teacher'] = $row4['short-teacher'];	
				$seo[$i]['site_about'] = $row4['site_about_'.$lang];	
				$i++;
			}
			 return $seo;
		}

		public static function Events(){
			$lang = $_SESSION['lang'];
			$db = Db::getConnection();
			$events = array();
			$result = $db->query("SELECT * FROM events ORDER BY datee DESC");
			$i=0;

		
			while($row = $result->fetch()){
				$events[$i]['id'] = $row['id'];
				$events[$i]['name'] = stripslashes($row['name_'.$lang]);
				$events[$i]['anons'] = stripcslashes($row['anons_'.$lang]);
				$events[$i]['text'] = stripcslashes($row['text_'.$lang]);
				$events[$i]['img'] = stripcslashes($row['img']);
				$events[$i]['datee'] = $row['datee'];

		
				$i++;

		}
		return $events;
	}
		public static function It(){
			$lang = $_SESSION['lang'];
			$db = Db::getConnection();
			$events = array();
			$result = $db->query("SELECT * FROM it ");
			$i=0;

			while($row = $result->fetch()){
			
			$it[$i]['people'] = stripslashes($row['people']);
			$it[$i]['work'] = stripcslashes($row['work_'.$lang]);
			$it[$i]['quote'] = stripcslashes($row['quote_'.$lang]);
			$it[$i]['img'] = stripcslashes($row['img']);
			$it[$i]['id'] = $row['id'];

		
			$i++;

			}
			return $it;
		}
	}
 ?>