<?php

// Iniciamos la sesión para poder acceder
// a los datos que están guardados en ella.
session_start();


// Eliminamos todas las variables que estaban guardadas
// dentro de la sesión.
//
// Por ejemplo:
// $_SESSION['usuario_id']
// $_SESSION['nombre']
// $_SESSION['rol']
$_SESSION = array();


// Comprobamos si PHP está utilizando cookies
// para mantener la sesión del usuario.
if (ini_get("session.use_cookies")) {

    // Obtenemos la configuración actual de la cookie
    // utilizada para identificar la sesión.
    $params = session_get_cookie_params();


    // Eliminamos la cookie de sesión.
//
// Para hacerlo, colocamos una fecha de expiración
// en el pasado. De esta forma, el navegador elimina
// la cookie.
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


// Destruimos completamente la sesión
// que estaba almacenada en el servidor.
session_destroy();


// Después de cerrar la sesión,
// enviamos al usuario nuevamente a la página de login.
header('Location: ../views/organizador/login.php');


// Detenemos la ejecución del código.
exit();

?>