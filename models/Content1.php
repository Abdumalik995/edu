<?php 
	class Content1{
		public static function Info($id){
			$lang = $_SESSION['lang'];
			$id=intval($id);
			$db=Db::getConnection();
			$info=array();
			$result=$db->query("SELECT * FROM content WHERE dropdown_id=$id");
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$row = $result->fetch();
			if($row['name']=='Me`yoriy hujjatlar'){
				$row1['list'] = explode('/', $row['text']);
				$row1['name'] = $row['name'];
				
				return $row1;
			}
			else{

			return $row;
			}
		}
	}



 ?>