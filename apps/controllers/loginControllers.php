<?php

// Iniciamos la sesión.
session_start();


// Indicamos que la respuesta será JSON.
header('Content-Type: application/json');


// Incluimos la clase de conexión.
require_once __DIR__ . '/../database/conexion.php';


// Incluimos la clase Usuario.
require_once __DIR__ . '/../models/usuarios.php';


// Creamos el objeto de conexión.
$conexion = new Conexion();


// Obtenemos la conexión PDO.
$pdo = $conexion->getConexion();


// Creamos el objeto Usuario.
$usuario = new Usuario($pdo);


// Comprobamos que la petición sea POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtenemos el email.
    $email = trim($_POST['correo'] ?? '');


    // Obtenemos la contraseña.
    $contrasena = $_POST['password'] ?? '';


    // Comprobamos que se hayan completado
    // ambos campos.
    if (empty($email) || empty($contrasena)) {

        echo json_encode([
            'success' => false,
            'message' => 'Por favor, completa todos los campos.'
        ]);

        exit;
    }


    // Buscamos el usuario mediante el objeto Usuario.
    $datosUsuario = $usuario->obtenerPorEmail($email);


    // Comprobamos que el usuario exista
    // y que la contraseña sea correcta.
    if (
        $datosUsuario &&
        password_verify(
            $contrasena,
            $datosUsuario['contrasena']
        )
    ) {

        // Guardamos los datos en la sesión.
        $_SESSION['usuario_id'] = $datosUsuario['id'];

        $_SESSION['nombre'] = $datosUsuario['nombre'];

        $_SESSION['rol'] = $datosUsuario['rol'];


        // Login correcto.
        echo json_encode([
            'success' => true,
            'redirect' => '../publico/inicio.php'
        ]);

    } else {

        // Datos incorrectos.
        echo json_encode([
            'success' => false,
            'message' => 'Correo o contraseña incorrectos.'
        ]);
    }


} else {

    // Método no permitido.
    echo json_encode([
        'success' => false,
        'message' => 'Método no permitido.'
    ]);
}

?>