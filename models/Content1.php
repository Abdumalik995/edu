<?php 
	class Content1{
		public static function Info($id){
			$lang = $_SESSION['lang'];
			$id=intval($id);
			$db=Db::getConnection();
			$info=array();
			$result=$db->query("SELECT * FROM content WHERE dropdown_id=$id");			
			$i = 0;
			while($row = $result->fetch()) {
				$row['name'] = $row['name_'.$lang];
				$row['anons'] = $row['anons_'.$lang];
				$row['text'] = $row['text_'.$lang];			
				$i++;
			}
			
			/*if(($row['name_'.$lang]=='Me`yoriy hujjatlar') || ($row['name_'.$lang]=='rus')){
				$row1['list'] = explode('/', $row['text_'.$lang]);
				$row1['name'] = $row['name_'.$lang];
				
				return $row1;
			}
			else{*/

			return $row;
			//}
		}
	}



 ?>