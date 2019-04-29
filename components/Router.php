<?php 
	class Router {
		public $routes;
		public function __construct() {
			$routesput = ROOT.'/config/routes.php';
			$this->routes = include($routesput);

		}
		public function getURL() {
			//adresslar qatori orqali kelgan uzgaruvchini taxrir qilish
			if(!empty($_SERVER['REQUEST_URI'])) {
				return trim($_SERVER['REQUEST_URI'], '/');
			}
		}
		public function run() {
			// urlni uzlshtirish
			$uri = $this->getURL();
			//routesga uzlashtirilgan massiv elementlarini uzgaruvchiga olish
			foreach($this->routes as $urlShablon => $yul) {
				echo $yul;
				//urldagi adressni routes bilan solishtiradi
				//if (preg_match('~$urlShablon')) {
					
				//}
			}
		}
	}
 ?>