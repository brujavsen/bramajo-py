<?php

class Usuario
{
    private $pdo;

    /**
     * Constructor de la clase Usuario.
     *
     * Recibe la conexión a la base de datos.
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    /**
     * Registra un nuevo usuario.
     */
    public function registrar(
        $nombre,
        $apellido,
        $email,
        $contrasena,
        $rol
    ) {

        // Encriptamos la contraseña antes de guardarla.
        $passHash = password_hash(
            $contrasena,
            PASSWORD_BCRYPT
        );

        // Obtenemos la fecha actual.
        $fechaActual = date('Y-m-d');

        $sql = "INSERT INTO usuario
                (
                    nombre,
                    apellido,
                    email,
                    contrasena,
                    rol,
                    fecha_registro
                )
                VALUES
                (
                    :nombre,
                    :apellido,
                    :email,
                    :contrasena,
                    :rol,
                    :fecha_registro
                )";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':nombre'         => $nombre,
            ':apellido'       => $apellido,
            ':email'          => $email,
            ':contrasena'     => $passHash,
            ':rol'            => $rol,
            ':fecha_registro' => $fechaActual
        ]);
    }


    /**
     * Obtiene todos los usuarios.
     */
    public function obtenerTodos()
    {
        $sql = "SELECT
                    id,
                    nombre,
                    apellido,
                    email,
                    rol,
                    fecha_registro
                FROM usuario";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll();
    }


    /**
     * Busca un usuario utilizando su email.
     */
    public function obtenerPorEmail($email)
    {
        $sql = "SELECT
                    id,
                    nombre,
                    apellido,
                    email,
                    contrasena,
                    rol
                FROM usuario
                WHERE email = :email";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ':email' => $email
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>