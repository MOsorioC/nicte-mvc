<?php

/**
 * Created by PhpStorm.
 * User: OSORIO
 * Date: 24/09/2016
 * Time: 10:37 AM
 */
class Controller {
	/**
	 * Método para buscar los modelos
	 * @param $model
	 */
	public function model($model) {
		if (file_exists('../app/models/' . $model . '.php')) {
			include_once '../app/models/' . $model . '.php';
			return new $model;
		} else {
			return null;
		}
	}

	/**
	 * Método para verificar las vistas
	 */
	public function view($vista, $datos = []){
		require_once "../app/views/". $vista. ".php";
	}

	public function url($url = ''){
			return sprintf(
				"%s://%s%s",
				isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
				$_SERVER['SERVER_NAME'],
				$url
			);
	}
}