<?php
namespace Controllers;
use MVC\Router;

class EncuestaController {
    public static function inicio(Router $router) {

        $router->render('Principal/inicio', []);
    }

    public static function principal(Router $router) {

        $router->render('Principal/encuesta', []);
    }
}