<?php
namespace Controllers;

use Model\Encuesta;
use MVC\Router;

class APIController {
    public static function resultados(Router $router) {
        session_start();
        isAuth();
        $encuestas = Encuesta::getAllJoin();
        $router->render('Principal/Resultados', [
            'encuestas' => $encuestas
        ]);
    }

    public static function guardarDatos() {

        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $encuesta = new Encuesta();
            $encuesta->sincronizar($_POST);
            $resultado = $encuesta->guardar();
        }
        
       
    }
}