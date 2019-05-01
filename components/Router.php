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
			// urlni uzlashtirish
			$uri = $this->getURL();
			//routesga uzlashtirilgan massiv elementlarini uzgaruvchiga olish
			foreach($this->routes as $urlShablon => $yul) {
				//echo $yul,'<br>';
				//urldagi adressni routes bilan solishtiradi
				if (preg_match("~$urlShablon~", $uri)) {
					//echo $yul,'<br>';
					$segments = explode('/', $yul);
					//print_r($segments);
					//massivning birinchi elementidan controller class yasash
					$ControllerNomi = array_shift($segments).'Controller';
					//echo "$ControllerNomi";
					$ControllerNomi = ucfirst($ControllerNomi);
					//echo $ControllerNomi;
					//massivning ikkinchi elementidan action metod yasash
					$actionName = 'action'.ucfirst(array_shift($segments));
					//controller fayliga ulanish
					$controllerFile = ROOT.'/controllers/'.$ControllerNomi.'.php';
					if(file_exists($controllerFile)) {
						include_once($controllerFile);
					}
					//obyekt hosil qilish va metodni chaqirish
					$controllerObyekt = new $ControllerNomi;
					$result = $controllerObyekt->actionName();
					if($result != null) {
						break;
					}
				}
			}
		}
	}
 ?>