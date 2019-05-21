<?php 
require_once(ROOT.'/models/Content.php');
require_once(ROOT.'/models/About.php');
	class AboutController {
		public function actionView($string, $id) {
			//echo "<br> sahifani ko`rish";
			$menu = array();
			$menu = Content::getMenu();

			$dropdown1 = array();
			$dropdown1  = Content::DropdownMenu();

			$aboutmore = array();
			$aboutmore = About::AboutMore($id);
			//echo "<br>",$id;
			require_once(ROOT.'/views/about/about.php');
			return true;

		}
	}
 ?>