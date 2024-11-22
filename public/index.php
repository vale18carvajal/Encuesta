<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\APIController;
use MVC\Router;
use Controllers\EncuestaController;
use Controllers\LoginController;

$router = new Router();

$router->get('/', [EncuestaController::class, 'inicio']);
$router->get('/encuesta', [EncuestaController::class, 'principal']);
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);
$router->get('/metricas', [APIController::class, 'resultados']);
$router->post('/metricas', [APIController::class, 'guardarDatos']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();