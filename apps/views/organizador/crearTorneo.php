<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit();
}
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Crear Torneo</title>

        <link rel="stylesheet" href="crearTorneo.css" />
        <link rel="stylesheet" href="../base/base.css" />
    </head>

    <body>
        <header class="header">
            <img class="header__logo" src="../../assets/bramajo-logo.png" alt="bramajo logo" />
            
            <input type="checkbox" name="nav" id="nav_check">

            <div class="ham_cnt">
                <svg id="nav_ham" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>

            <nav class="header__nav">
                <a class="nav__link" href="../publico/inicio.php">Inicio</a>
                <a class="nav__link" href="../publico/torneos.php">Torneos</a>
                <a class="nav__link" href="../organizador/crearTorneo.php">Crear torneo</a>
                <a class="nav__link" href="../participante/perfil.php">Perfil</a>
                
                <!-- Botón de Cerrar Sesión adentro de la navegación -->
                <a class="nav__link" href="../../controllers/logoutControllers.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                    </svg>
                    Cerrar sesión
                </a>
            </nav>
        </header>

        <main>
            <h1 class="gestion_titulo">CREA TU TORNEO</h1>
            <p class="gestion_desc">Crea y administra tus competiciones con BRAMAJO</p>

            <section class="formulario">
                <h2>Crea tu torneo</h2>

                <form id="formCrearTorneo">
                    <label for="nombre_torneo">Nombre del Torneo:</label>
                    <input type="text" id="nombre_torneo" name="nombre" placeholder="Ej: Copa Verano" required />

                    <label for="deporte">Deporte:</label>
                    <input type="text" id="deporte" name="deporte" placeholder="Ej: Fútbol" required />

                    <label for="emparejamiento">Elije el sistema de emparejamiento:</label>
                    <select id="emparejamiento" name="emparejamiento">
                        <option value="competitiva">Competitiva</option>
                        <option value="eliminacion">Eliminación directa</option>
                        <option value="liga">Liga</option>
                        <option value="suizo">Sistema suizo</option>
                    </select>

                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required />

                    <label for="cantidad_equipos">Cantidad de Equipos:</label>
                    <input type="number" id="cantidad_equipos" name="cantidad_equipos" min="2" required />

                    <button type="submit">Crear Torneo</button>
                </form>
            </section>
        </main>

        <footer>
            <p>BRAMAJO - Sistema de Gestión de Torneos</p>
        </footer>
    </body>
</html>