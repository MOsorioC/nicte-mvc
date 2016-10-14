<?php

/**
 * Created by PhpStorm.
 * User: OSORIO
 * Date: 24/09/2016
 * Time: 11:01 AM
 */
class HomeController extends Controller {

	//pagina principalgit
    public function index($values) {
		return $this->view("home/index");
	}

	public function lista() {
		echo "retorna la lista";
	}

	public function insert($values){
		$object = (object)$values[0];
		echo $object->hola;
	}
}