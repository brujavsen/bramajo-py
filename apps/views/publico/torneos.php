<?php

$usuarioLogueado = false;
/*  Require-once carga el archivo de datostorneos y saca los datos del array */
require_once "datosTorneos.php";

$filtro = $_GET["filtro"] ?? "recientes";

if ($filtro === "abiertas") {
    $tituloSeccion = "Inscripciones abiertas";

    $torneosMostrados = array_filter(
        $torneos,
        function ($torneo) {
            return $torneo["inscripcionAbierta"] === true;
        }
    );
} else {
    $tituloSeccion = "Populares";

    $torneosMostrados = array_filter(
        $torneos,
        function ($torneo) {
            return $torneo["popular"] === true;
        }
    );
}

?>



 <!-- $Filtro recibe el url(lo que se manda) -->
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Torneos - BRAMAJO</title>
	<link rel="stylesheet" href="torneos.css">
</head>
<body>
	<header class="header">
		<img class="header__logo" src="../../assets/bramajo-logo.png" alt="bramajo logo">
		<nav class="header__nav">
			<a class="nav__link" href="../publico/inicio.php">← Volver</a>
			<a class="nav__link" href="../publico/soporte.php">Soporte</a>
			<?php if($usuarioLogueado): ?>
				<button class="btn-registro" onclick="window.location.href='../organizador/crearTorneo.php'">Crear torneo</button>
			<?php else: ?>
				<button class="btn-registro" onclick="window.location.href='../organizador/login.php'">Iniciar sesión</button>
				<button class="btn-registro" onclick="window.location.href='../organizador/registro.php'">Registrate ya</button>
			<?php endif; ?>
		</nav>
	</header>
	<main>
		<h1>TORNEOS</h1>
		<section class="busqueda">
			<div class="buscador">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35m0 0A7.5 7.5 0 1 0 6.04 6.04a7.5 7.5 0 0 0 10.61 10.61Z"/>
				</svg>
				<input type="text" placeholder="Buscar torneos" id="buscador">
			</div>
			<div class="filtros">
				<select id="deporte" class="filtro" name="deporte">
   			 <option value="" disabled selected>Deporte</option>
   			 <option value="futbol">Fútbol</option>
    		<option value="basquetbol">Básquetbol</option>
    		<option value="voleibol">Voleibol</option>
    		<option value="tenis">Tenis</option>
    		<option value="handball">Handball</option>
		</select>

			<!-- Botones de filtro de inscripcion y popularess -->
				<button class="filtro <?= $filtro === "recientes" ? "activo" : "" ?>"
            onclick="window.location.href='torneos.php?filtro=recientes'"
>           Populares
    </button>

            <button class="filtro <?= $filtro === "abiertas" ? "activo" : "" ?>"
            onclick="window.location.href='torneos.php?filtro=abiertas'"
>               Inscripciones abiertas
    </button>
			</div>
		</section>
		
		
		
		

		<section class="<?= $filtro === "abiertas" ? "inscripcionabierta" : "popular" ?>">

    <h2 class="seccion-titulo">
        <?= htmlspecialchars($tituloSeccion) ?>
    </h2>

    <div class="torneos-grid">

        <?php foreach ($torneosMostrados as $torneo): ?>

            <article
                class="torneo-card"
                id="torneo<?= $torneo["id"] ?>"
               onclick="window.location.href='infoTorneos.php?id=<?= $torneo["id"] ?>'"

            >
                <img
                    src="<?= htmlspecialchars($torneo["imagen"]) ?>"
                    alt="<?= htmlspecialchars($torneo["nombre"]) ?>"
                >

                <div class="torneo-info">

                    <p class="fecha">
                        Fecha:
                        <?= htmlspecialchars($torneo["detalles"]["fecha"]) ?>
                    </p>

                    <h3>
                        <?= htmlspecialchars($torneo["nombre"]) ?>
                    </h3>

                    <p class="ubicacion">
                        📍
                        <?= htmlspecialchars($torneo["detalles"]["lugar"]) ?>
                    </p>

                    <?php if (
                        $usuarioLogueado &&
                        $torneo["inscripcionAbierta"] === true
                    ): ?>

                        <button
                            class="btn-unirse"
                            type="button"
                            onclick="event.stopPropagation(); mostrarventana();"
                        >
                            Unirse
                        </button>

                    <?php endif; ?>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

    <?php if (empty($torneosMostrados)): ?>

        <p class="sin-torneos">
            No hay torneos disponibles en esta sección.
        </p>

    <?php endif; ?>

</section>

		</section>
		<section class="tipos">
			<h2 class="seccion-titulo">Tipos</h2>
			<div class="tipos-grid">
				<button class="tipo">Futbol</button>
				<button class="tipo">Volleyball</button>
				<button class="tipo">Tenis</button>
				<button class="tipo">Natacion</button>
				<button class="tipo">Basketball</button>
				<button class="tipo">Handball</button>
				<button class="tipo">Padel</button>
				<button class="tipo">Atletismo</button>
				<button class="tipo">Boxeo</button>
			</div>
			<?php if($usuarioLogueado): ?>
				<button class="crear-torneo" onclick="window.location.href='../organizador/crearTorneo.php'">
					ORGANIZA TUS PROPIOS<br>
					TORNEOS
				</button>
			<?php endif; ?>
		</section>

	
        
    

	<!-- Se termina la validacion php -->



		<footer>
			<h3>BRAMAJO - Sistema de Gestión de Torneos</h3>
			<p1>
				telefono: +598 96 123 456 | email: info@bramajo.com  | 
			</p1>
			<p2>Dirección: Ejido 1275 | Montevideo, Uruguay</p2>
			
			<p3>Redes sociales: bramajo en Facebook, @bramajo en Twitter, @bramajo en Instagram</p3>
			
			<p5>© 2024 Todos los derechos reservados</p5>
		</footer>	
	</main>

    <div class="ventana" id="ventana">
        <div class="ventana-contenido">
            <h2>SOLICITA UNIRTE</h2>
            <button class="cerrar-ventana" onclick="cerrarVentana()">X</button>

        <form id="formulariounirse">
            <label for="nombre">Nombre y Apellido:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="edad">Edad:</label>
                <input type="number" id="edad" name= "edad" required>

            <label for="sexo"> Sexo:</label>
            <select id="sexo" name="sexo" required>
                <option value="" disabled selected>Selecciona tu sexo</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
                </select>

            <label for="experiencia">Experiencia en el deporte:</label>
            <input type="text" id="experiencia" name="experiencia" required>

            <button type="submit" class="btn-solicitud">Enviar solicitud</button>
        </form>
            <script src="../../assets/js/unirse.js"></script>
</body>
</html>