<?php

/**
 * Created by PhpStorm.
 * User: OSORIO
 * Date: 24/09/2016
 * Time: 10:35 AM
 */
class App {
	//controlador por default
	protected $controller = "HomeController";
	//vista por default
	protected $method = 'index';
    //parametros por default
	protected $params = array();

    /**
     * Metodo principal del sistema
     * App constructor.
     */
	public function __construct() {
		$url = null;
		//GET
		$url = $this->parseURL();
		//verificamos si el controlador existe, la ruta
		if (file_exists('../app/controllers/' . $url[0] . 'Controller.php')) {
			$this->controller = $url[0]. "Controller";
			unset($url[0]);
		}elseif($url[0]!=null) {
            $this->controller =  "ErrorController";
            $this->sendErrorMesagge();
            die();
        }
		require_once '../app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;
		//verificamos si el metodo existe
		if (isset($url[1])){
			if (method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}
        /**
         * Verificamos el tipo de metodo obtenido para saber si hay parametros o no
         * TODO faltan asignar los demas metodos PUT Y DELETE
         */
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    //obtenemos los parametros
			$this->params['values'] = [$_POST];
		}else{
			//obtenemos los parametros
			$this->params['values'] = $url ? array_values($url) : [];
		}
		call_user_func_array([$this->controller, $this->method],$this->params);

	}

    /**
     * Convertimos la url obtenida en una arreglo para poder verificar el modelo obtenido
     * @return array
     */
	public function parseURL() {
		if (isset($_GET['url'])) {
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}

	public function sendErrorMesagge(){
        if (file_exists('../app/controllers/ErrorController.php')) {
            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            call_user_func_array([$this->controller,'error404'],$this->params);
        }

    }

}