<?php namespace Config;

class Router{

	public static function runConnectivity(Request $request){
		$controller = $request->get_controller() . "controller";
		$route = ROOT . "controller" . DS . $controller . ".php";
		$method = $request->get_method();
		if (empty($method)) {
			$method = "login";
		}
		$argument = $request->get_argument();
		if (is_readable($route)) {
			require_once $route;
			$mostrar = "controller\\" . $controller;
			$controller = new $mostrar;
			if (!isset($argument)) {
				$datos = call_user_func(array($controller, $method));
			} else {
				$datos = call_user_func_array(
					array($controller, $method),
					$argument);
				}
			}


			$route = ROOT . "views" .DS. $request->get_controller() .DS. $request->get_method() . ".php";
			if (is_readable($route)) {
				require_once $route;
			} else {
				print "No se encontro la vista";
			}
		}
	}
	?>
