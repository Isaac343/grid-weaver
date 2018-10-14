<?php namespace Config;

	class Autoload{
		public static function callObject(){
			spl_autoload_register(function($class){
				$route = ROOT . strtolower(str_replace("\\", "/", $class)) . ".php";
				include_once $route;
			});
		}
	}
?>
