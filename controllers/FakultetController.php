<?php 
require_once(ROOT.'/models/Fakultet.php');
require_once(ROOT.'/models/Content.php');
	class FakultetController{
		public static function actionFakultet($id){
		$menu = array();
		$menu = Content::getMenu();

		$dropdown1 = array();
		$dropdown1  = Content::DropdownMenu();
		$fakultet = Fakultet::fakultetlar($id);
		$kafedralar = Fakultet::kafedralar($id);
		require_once(ROOT.'/views/main/fakultet.php');
		return true;
		}
	}


 ?>