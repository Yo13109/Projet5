<?php
class Route
{
	private $_path;
	private $_controller;
	private $_action;
	private $_method;
	private $_param;
	private $_manager;
	private $_auth;

	public function __construct($route)
	{
		$this->_path = $route->path;
		$this->_controller = $route->controller;
		$this->_action = $route->action;
		$this->_method = $route->method;
		$this->_param = $route->param;
		$this->_manager = $route->manager;
		$this->_auth = $route->auth;
	}

	public function getPath()
	{
		return $this->_path;
	}

	public function getController()
	{
		return $this->_controller;
	}

	public function getAction()
	{
		return $this->_action;
	}

	public function getMethod()
	{
		return $this->_method;
	}

	public function getParam()
	{
		return $this->_param;
	}

	public function getManager()
	{
		return $this->_manager;
	}

	public function run($httpRequest, $config)
	{
		if ($this->_auth == false || $this->_auth && !empty($_SESSION["user"])) {


			global $controller;
			$controllerName = $this->_controller . "Controller";

			if (class_exists($controllerName)) {

				$controller = new $controllerName($httpRequest, $config);
				if (method_exists($controller, $this->_action)) {
					$controller->{$this->_action}(...$httpRequest->getParam());
				} else {
					throw new ActionNotFoundException();
				}
			} else {
				throw new ControllerNotFoundException();
			}
		}
		else{
		header("location:". $config->basepath . "/Login");
		}
	}
}
