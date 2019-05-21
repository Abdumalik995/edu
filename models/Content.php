<?php 
	$lang = $_SESSION['lang'];
	
	class Content {	
		//menyuni asosiylarini chiqarish
		public static function getMenu(){
			$lang = $_SESSION['lang'];

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
			$lang = $_SESSION['lang'];
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

		public static function menuNews() {
			$lang = $_SESSION['lang'];
			$db = DB::getConnection();
			$news = [];
			$result3 = $db->query("SELECT * FROM cantent ORDER BY id desc limit 2");
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
			$result = $db ->query("SELECT * FROM cantent where id = 2");
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
			$result = $db->query("SELECT * FROM events ORDER BY date_added DESC");
			$i=0;

		
			while($row = $result->fetch()){
				$events[$i]['id'] = $row['id'];
				$events[$i]['name'] = stripslashes($row['name_'.$lang]);
				$events[$i]['anons'] = stripcslashes($row['anons_'.$lang]);
				$events[$i]['text'] = stripcslashes($row['text_'.$lang]);
				$events[$i]['img'] = stripcslashes($row['img']);
				$events[$i]['datee'] = $row['date_added'];

		
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


		/*search bulimi uchun*/

		public static function search($key) {
			$lang = $_SESSION['lang'];
			$db = Db::getConnection();
			$massiv_key = array();
			$result = $db->query("SELECT id, name_".$lang.", anons_".$lang.", text_".$lang.", img, keyss, author, date_added  FROM news WHERE name_".$lang." LIKE '%".$key."%'
				UNION
				SELECT id, name_".$lang.", anons_".$lang.", text_".$lang.", img, keyss, author, date_added FROM events WHERE name_".$lang." LIKE '%".$key."%' ");
			$i = 0;

			while ($row = $result->fetch()) {
				$massiv_key[$i]['id'] = $row['id'];
				$massiv_key[$i]['name'] = $row['name_'.$lang];
				$massiv_key[$i]['anons'] = $row['anons_'.$lang];
				$massiv_key[$i]['text'] = $row['text_'.$lang];
				$massiv_key[$i]['img'] = $row['img'];
				$massiv_key[$i]['keyss'] = $row['keyss'];
				$massiv_key[$i]['author'] = $row['author'];
				$massiv_key[$i]['date_added'] = $row['date_added'];
				$i++;
			}

			return $massiv_key;
		}
	}
 ?>