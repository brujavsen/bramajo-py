<?php
header('Content-Type: application/json');

// Requerir conexión a la BD y el modelo de usuarios
require_once __DIR__ . '/../database/conexion.php';
require_once __DIR__ . '/../models/usuarios.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre     = trim($_POST['nombre'] ?? '');
    $apellido   = trim($_POST['apellido'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $contrasena = $_POST['contrasena'] ?? '';
    $rol        = trim($_POST['rol'] ?? 'participante');

    if (empty($nombre) || empty($apellido) || empty($email) || empty($contrasena)) {
        echo json_encode(['success' => false, 'message' => 'Por favor, completa todos los campos.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'El formato del correo electrónico no es válido.']);
        exit;
    }

    try {
        $creado = registrarUsuario($pdo, $nombre, $apellido, $email, $contrasena, $rol);

        if ($creado) {
            echo json_encode(['success' => true, 'message' => 'Usuario registrado exitosamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'No se pudo completar el registro.']);
        }
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            echo json_encode(['success' => false, 'message' => 'Este correo ya está registrado.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
        }
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método de petición no permitido.']);
}
?>