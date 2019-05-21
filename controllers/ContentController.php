<?php 
require_once(ROOT.'/models/Content1.php');
require_once(ROOT.'/models/Content.php');

class ContentController{
	public function actionContent($id){
		$menu = array();
		$menu = Content::getMenu();

		$dropdown1 = array();
		$dropdown1  = Content::DropdownMenu();

		$info=array(); 
		$info=Content1::Info($id);
		require_once(ROOT.'/views/main/content.php');
		return true;
	}
}




 ?>