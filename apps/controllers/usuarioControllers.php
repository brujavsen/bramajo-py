<?php

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


// Creamos un objeto Usuario.
$usuario = new Usuario($pdo);


// Comprobamos que la petición sea POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtenemos los datos enviados por el formulario.
    $nombre = trim($_POST['nombre'] ?? '');

    $apellido = trim($_POST['apellido'] ?? '');

    $email = trim($_POST['email'] ?? '');

    // No usamos trim() en la contraseña.
    $contrasena = $_POST['contrasena'] ?? '';


    // El rol será participante por defecto.
    $rol = 'participante';


    // Comprobamos que los campos obligatorios
    // estén completos.
    if (
        empty($nombre) ||
        empty($apellido) ||
        empty($email) ||
        empty($contrasena)
    ) {

        echo json_encode([
            'success' => false,
            'message' => 'Por favor, completa todos los campos.'
        ]);

        exit;
    }


    // Comprobamos que el email tenga un formato válido.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo json_encode([
            'success' => false,
            'message' => 'El formato del correo electrónico no es válido.'
        ]);

        exit;
    }


    try {

        // Utilizamos el objeto Usuario
        // para registrar al usuario.
        $creado = $usuario->registrar(
            $nombre,
            $apellido,
            $email,
            $contrasena,
            $rol
        );


        // Comprobamos si se registró correctamente.
        if ($creado) {

            echo json_encode([
                'success' => true,
                'message' => 'Usuario registrado exitosamente.'
            ]);

        } else {

            echo json_encode([
                'success' => false,
                'message' => 'No se pudo completar el registro.'
            ]);
        }


    } catch (PDOException $e) {

        // Error por correo duplicado.
        if ($e->getCode() == 23000) {

            echo json_encode([
                'success' => false,
                'message' => 'Este correo ya está registrado.'
            ]);

        } else {

            echo json_encode([
                'success' => false,
                'message' => 'Error en la base de datos: ' . $e->getMessage()
            ]);
        }
    }

} else {

    // Rechazamos métodos diferentes a POST.
    echo json_encode([
        'success' => false,
        'message' => 'Método de petición no permitido.'
    ]);
}

?>