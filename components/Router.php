<?php 
	class Router {
		private $routes;
		public function __construct() {
			$routesput = ROOT.'/config/routes.php';
			$this->routes = include($routesput);
		}
	}
 ?>