<?php

/**
 * Created by PhpStorm.
 * User: OSORIO
 * Date: 04/10/2016
 * Time: 02:16 PM
 */
class ErrorController extends Controller {

    public function error404($values = [])
    {
        return $this->view("errors/404");
    }

}