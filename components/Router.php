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

			/*Session hosil qilib uni boshqarish til tanlash uchun*/
			if(!isset($_SESSION['lang']) or $uri == 'uz') {
			 $_SESSION['lang'] = 'uz';
			} elseif ($uri == 'ru') {
			 $_SESSION['lang'] = 'ru';
			};
			 
			//routesga uzlashtirilgan massiv elementlarini uzgaruvchiga olish
			foreach($this->routes as $urlShablon => $yul) {
				//echo $yul,'<br>';
				//urldagi adressni routes bilan solishtiradi
				if (preg_match("~$urlShablon~", $uri)) {


					$tartibli_qiymat = preg_replace("~$urlShablon~", $yul, $uri);
					//echo $tartibli_qiymat,'<br>';
					$segments = explode('/', $tartibli_qiymat);
					//print_r($segments);
					//massivning birinchi elementidan controller class yasash
					$ControllerNomi = array_shift($segments).'Controller';
					//echo "$ControllerNomi";
					$ControllerNomi = ucfirst($ControllerNomi);
					//echo $ControllerNomi;
					//massivning ikkinchi elementidan action metod yasash
					$actionName = 'action'.ucfirst(array_shift($segments));
					//$parametrs = $segments;
					/*echo "<br> controllernomi ".$ControllerNomi;
					echo "<br> Actionnomi ".$actionName;
					echo "<pre>";
					print_r($segments);*/
					//controller fayliga ulanish
					$controllerFile = ROOT.'/controllers/'.$ControllerNomi.'.php';
					if(file_exists($controllerFile)) {
						include_once($controllerFile);
					}
					//obyekt hosil qilish va metodni chaqirish
					$controllerObyekt = new $ControllerNomi;
					$result = call_user_func_array(array($controllerObyekt, $actionName),$segments);
					//echo "<br>$result";
					if($result != null) {
						break;
					}
				}
			}
		}
	}
 