<?php namespace Config;

class Request{

	private $controller;
	private $method;
	private $argument;

	public function __construct(){
		if(isset($_GET['url'])){
			$route = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
			$route = explode("/", $route);
			$route = array_filter($route);
			if (empty($route)){
				$this->controller = "index";
			}	else{
				$this->controller = strtolower(array_shift($route));
			}

			$this->method = strtolower(array_shift($route));

			if (!$this->method){
				$this->method = "index";
			}
			$this->argument = $route;
		} else{
			$this->controller = "index";
			$this->method = "index";
		}
	}

	public function get_controller(){
		return $this->controller;
	}

	public function get_method(){
		return $this->method;
	}

	public function get_argument(){
		return $this->argument;
	}
}
?>
