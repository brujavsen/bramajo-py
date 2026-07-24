<?php
// Enviar el encabezado HTTP 404
http_response_code(404);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no encontrada - Error 404</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 100px;
            background-color: #f4f4f4;
        }
        h1 {
            font-size: 50px;
            color: #d9534f;
        }
        p {
            font-size: 18px;
            color: #666;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0275d8;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #025aa5;
        }
    </style>
</head>
<body>
    <h1>¡Oops! Página no encontrada</h1>
    <p>Lo sentimos, la página que buscas no existe o ha sido movida.</p>
    <a href="/">Volver al inicio</a>
</body>
</html>
