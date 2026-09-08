<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registro</title>
        <link rel="stylesheet" href="registro.css" />
    </head>

    <body>
        <header class="header">
            <img class="header__logo" src="../../assets/bramajo-logo.png" alt="bramajo logo" />
            <nav class="header__nav">
                <a class="nav__link" href="../publico/inicio.php">
                    Continuar como invitado
                </a>
            </nav>
        </header>

        <main>
            <h1 class="gestion_titulo">REGISTRARSE</h1>

            <section class="presentacion">
                <h2>Crea tu cuenta y accede a todos los torneos, competencias y eventos</h2>
                <p>Solo deberás ingresar tu nombre, apellido, correo y contraseña.</p>
            </section>

            <section class="formulario">
                <h2>Crear Cuenta</h2>
                <!-- Guardar el mensaje de error de validación -->
                <p id="mensajeError" class="mensaje-error"></p>
                <!-- Se agrega id al form y name a los inputs -->
                <form id="formRegistro">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej: Juan" />

                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Ej: Pérez" />

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Ej: juan@ejemplo.com" />

                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="**********" />

                    <!-- Opcional: define el rol directamente -->
                    <input type="hidden" name="rol" value="participante" />

                    <!-- El botón debe estar DENTRO del form y ser type="submit" -->
                    <button type="submit" class="link_gestion">Crear cuenta</button>

                    <h3>
                        ¿Ya tienes una cuenta?
                        <a id="iniciarSesion" href="login.php">Inicia sesión</a>
                    </h3>
                </form>
            </section>
        </main>

        <footer>
            <p>BRAMAJO - Sistema de Gestión de Torneos</p>
        </footer>

        <!-- Script de JS para enviar el formulario con Fetch -->
        <script src="../../assets/js/registro.js"></script>
    </body>
</html>