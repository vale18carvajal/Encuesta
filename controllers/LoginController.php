<?php

namespace Controllers;


use Model\Usuario;
use MVC\Router;

class LoginController
{
    public static function login(Router $router)
    {

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Usuario($_POST);
            
            $alertas = $auth->validarLogin();

            if (empty($alertas)) {
                //Verificar que el usuario exista
                
                $auth = Usuario::where('correo', $auth->correo);
                if (!$auth) {
                    Usuario::setAlerta('error', 'El usuario no existe');
                } else {
                    //El usuario sí existe
                    if (password_verify($_POST['clave'], $auth->clave)) { //Retorna true o false
                        //Iniciar las sesión del usuario
                        session_start();
                        $_SESSION['id'] = $auth->id;
                        $_SESSION['correo'] = $auth->correo;
                        $_SESSION['administrador'] = $auth->administrador;
                        $_SESSION['login'] = true;

                        //Redireccionar
                        header('Location: /metricas');
                    } else {
                        Usuario::setAlerta('error', 'La contraseña es incorrecta');
                    }
                }
            }
            
        }
        $alertas = Usuario::getAlertas();
            $router->render('auth/login', [
                'titulo' => 'Iniciar Sesión',
                'alertas' => $alertas
            ]);
    }

        public static function logout()
        {
            session_start();
            $_SESSION = [];
            header('Location: /login');
        }
}
