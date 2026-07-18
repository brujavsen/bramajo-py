<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../../../apps/templates/base.css" />
</head>

<body>
    <?php include __DIR__ . '/../base/Header.php'; ?>


<main>
    <h1>INICIAR SESIÓN</h1>

    <section class="presentacion">
        <h2>Ingresa a tu cuenta para acceder a todos los torneos, competencias y eventos</h2>
        <p1>Por favor, ingresa tu correo y contraseña.
        </p1>
    </section>

    <section class="formulario">
        <h2>Iniciar Sesión</h2>

        <form>
            <label>Correo Electrónico:</label>
            <input type="email" placeholder="Ej: juan@ejemplo.com">

            <label>Contraseña:</label>
            <input type="password" placeholder="**********">
            
            <h3>¿No tienes una cuenta? <a id="registrarse" href="registro.php">Regístrate aquí</a></h3>

        </form>

    </section>
 <button>Iniciar Sesión</button>
</main>
<footer>
			<p>BRAMAJO - Sistema de Gestión de Torneos</p>
		</footer>
</body>
</html>