<?php 
	class NewsController {
		public function actionIndex() {
			echo "<br> Yangiliklar ruyhati";
			return true;
		}
		public function actionView($categoriya, $id) {
			echo "<br> sahifani ko`rish";
			echo "<br>",$categoriya;
			echo "<br>",$id;
			return true;

		}
		
	}
 ?>