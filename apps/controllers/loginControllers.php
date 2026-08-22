<?php
session_start();
header('Content-Type: application/json');

require_once __DIR__ . '/../database/conexion.php';
require_once __DIR__ . '/../models/usuarios.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email      = trim($_POST['email'] ?? '');
    $contrasena = $_POST['contrasena'] ?? '';

    if (empty($email) || empty($contrasena)) {
        echo json_encode(['success' => false, 'message' => 'Por favor, completa todos los campos.']);
        exit;
    }

    $usuario = obtenerUsuarioPorEmail($pdo, $email);

    if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['nombre']     = $usuario['nombre'];
        $_SESSION['rol']        = $usuario['rol'];

        echo json_encode([
            'success'  => true,
            'redirect' => '../organizador/crearTorneo.php'
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Correo o contraseña incorrectos.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
}
?>