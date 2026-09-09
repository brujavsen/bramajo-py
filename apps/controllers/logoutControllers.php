<?php

class LogoutController
{
    /**
     * Cierra la sesión del usuario.
     */
    public function cerrarSesion()
    {
        // Iniciamos la sesión.
        session_start();


        // Eliminamos todas las variables de sesión.
        $_SESSION = array();


        // Comprobamos si PHP utiliza cookies
        // para manejar las sesiones.
        if (ini_get("session.use_cookies")) {

            // Obtenemos los parámetros de la cookie.
            $params = session_get_cookie_params();


            // Eliminamos la cookie de sesión.
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }


        // Destruimos la sesión.
        session_destroy();


        // Redirigimos al login.
        header(
            'Location: ../views/organizador/login.php'
        );


        // Detenemos la ejecución.
        exit();
    }
}


// Creamos el objeto del controlador.
$logout = new LogoutController();


// Ejecutamos el cierre de sesión.
$logout->cerrarSesion();

?>