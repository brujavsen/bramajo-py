<?php

// Iniciamos una sesión para poder guardar información
// del usuario mientras navega por la página.
session_start();


// Indicamos que este archivo va a devolver una respuesta
// en formato JSON.
header('Content-Type: application/json');


// Incluimos el archivo que contiene la conexión
// con la base de datos.
require_once __DIR__ . '/../database/conexion.php';


// Incluimos el archivo que contiene las funciones
// relacionadas con los usuarios.
require_once __DIR__ . '/../models/usuarios.php';


// Comprobamos que la petición que llegó al servidor
// utiliza el método POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtenemos el correo enviado desde el formulario.
    //
    // trim() elimina espacios innecesarios al principio
    // y al final del correo.
    //
    // Si no existe "email", utilizamos una cadena vacía.
    $email = trim($_POST['email'] ?? '');


    // Obtenemos la contraseña enviada desde el formulario.
    //
    // En este caso no usamos trim(), porque no queremos
    // modificar la contraseña introducida por el usuario.
    $contrasena = $_POST['contrasena'] ?? '';


    // Comprobamos que el usuario haya completado
    // tanto el correo como la contraseña.
    if (empty($email) || empty($contrasena)) {

        // Enviamos una respuesta JSON indicando que hubo un error.
        echo json_encode([
            'success' => false,
            'message' => 'Por favor, completa todos los campos.'
        ]);

        // Detenemos la ejecución del archivo.
        exit;
    }


    // Buscamos en la base de datos un usuario
    // que tenga el correo introducido.
    $usuario = obtenerUsuarioPorEmail($pdo, $email);


    // Comprobamos dos cosas:
    //
    // 1. Que el usuario exista.
    // 2. Que la contraseña introducida coincida con
    //    la contraseña almacenada en la base de datos.
    //
    // password_verify() se utiliza porque la contraseña
    // almacenada debería estar protegida mediante un hash.
    if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {


        // Si los datos son correctos, guardamos información
        // del usuario dentro de la sesión.
        //
        // Esto permite recordar quién inició sesión
        // mientras navega por el sitio.

        $_SESSION['usuario_id'] = $usuario['id'];

        // Guardamos el nombre del usuario.
        $_SESSION['nombre'] = $usuario['nombre'];

        // Guardamos el rol del usuario.
        $_SESSION['rol'] = $usuario['rol'];


        // Enviamos una respuesta indicando que
        // el inicio de sesión fue exitoso.
        echo json_encode([
            'success' => true,

            // Indicamos a JavaScript a qué página
            // debe enviar al usuario después del login.
            'redirect' => '../organizador/crearTorneo.php'
        ]);

    } else {

        // Si el usuario no existe o la contraseña es incorrecta,
        // enviamos un mensaje de error.
        echo json_encode([
            'success' => false,
            'message' => 'Correo o contraseña incorrectos.'
        ]);
    }


} else {

    // Si alguien intenta acceder a este archivo utilizando
    // un método diferente a POST, rechazamos la petición.
    echo json_encode([
        'success' => false,
        'message' => 'Método no permitido.'
    ]);
}

?>