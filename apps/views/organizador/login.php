<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Inicio de sesión</title>
        <link rel="stylesheet" href="../base/base.css" />
        <link rel="stylesheet" href="login.css" />
    </head>

    <body>
        <header class="header">
            <img class="header__logo" src="../../assets/bramajo-logo.png" alt="bramajo logo" />
            <nav class="header__nav">
                <a class="nav__link" href="../publico/iniciox.php">
                    Continuar como invitado
                </a>
            </nav>
        </header>

        <main>
            <h1 class="gestion_titulo">INICIAR SESIÓN</h1>

            <section class="presentacion">
                <h2>Ingresa a tu cuenta para acceder a todos los torneos, competencias y eventos</h2>
                <p>Por favor, ingresa tu correo y contraseña.</p>
            </section>

            <section class="formulario">
                <h2>Iniciar Sesión</h2>

                <form id="formLogin">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Ej: juan@ejemplo.com" required />

                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="**********" required />

                    <button type="submit" class="link_gestion">Iniciar Sesión</button>

                    <h3>
                        ¿No tienes una cuenta?
                        <a id="registrarse" href="registro.php">Regístrate aquí</a>
                    </h3>
                </form>
            </section>
        </main>

        <footer>
            <p>BRAMAJO - Sistema de Gestión de Torneos</p>
        </footer>

        <!-- Script de JS para enviar las credenciales -->
        <script src="../../assets/js/login.js"></script>
    </body>
</html>