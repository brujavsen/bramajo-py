<?php

class Conexion
{
    private $host = 'localhost';
    private $dbname = 'bramajo';
    private $username = 'root';
    private $password = 'root';

    private $pdo;

    /**
     * Constructor de la clase.
     *
     * Cuando se crea un objeto Conexion,
     * automáticamente intenta conectarse a la base de datos.
     */
    public function __construct()
    {
        try {

            $this->pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4",
                $this->username,
                $this->password
            );

            // Configuramos PDO para que lance excepciones
            // cuando ocurra un error.
            $this->pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            // Configuramos el formato de los resultados.
            $this->pdo->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

        } catch (PDOException $e) {

            die(json_encode([
                "success" => false,
                "message" => "Error de conexión: " . $e->getMessage()
            ]));
        }
    }

    /**
     * Devuelve la conexión PDO.
     */
    public function getConexion()
    {
        return $this->pdo;
    }
}
?>