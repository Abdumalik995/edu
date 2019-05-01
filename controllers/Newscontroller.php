<?php 
	class NewsController {
		public function actionIndex() {
			echo "<br> Yangiliklar ruyhati";
			return true;
		}
		public function actionView($parametr) {
			echo "<br> sahifani ko`rish";
			echo "<br>",$parametr['0'];
			echo "<br>",$parametr['1'];
			return true;

		}
		
	}
 ?>