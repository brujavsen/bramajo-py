<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Crear Torneo</title>
		<link rel="stylesheet" href="crearTorneo.css">
	</head>
	<body>
		<header class="header">
			<img class="header__logo" src="../../assets/bramajo-logo.png" alt="BRAMAJO">
			<nav class="header__nav">
			<a class="nav__link" href="../publico/torneos.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">

                </svg>
               <- Volver
            </a>
			<a class="nav__link" href="../publico/soporte.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                Soporte
            </a>
			</nav>
		</header>

		<main>
			<section class="titulo">
				<h1>CREA TU TORNEO</h1>
				<p>Completa los datos para crear y configurar tu torneo deportivo</p>
			</section>

		<form class="formulario" id="formCrearTorneo">

			<section class="bloque">
				<h2>Información básica</h2>
				<div class="fila">
					<div class="campo">
						<label for="nombre">Nombre del Torneo</label>
						<input type="text" id="nombre" name="nombre" placeholder="Ej: Copa verano 2026" required>
					</div>
					<div class="campo">
						<label for="deporte">Deporte</label>
						<select id="deporte" name="deporte" required>
							<option value="futbol">Futbol</option>
							<option value="basquetbol">Basquetbol</option>
							<option value="voleibol">Voleibol</option>
							<option value="tenis">Tenis</option>
						</select>
					</div>
				</div>

				<div class="campo campo-descripcion">
					<label for="descripcion">Descripción del Torneo</label>
					<textarea id="descripcion" name="descripcion" placeholder="Escribí una breve descripción de lo que es el torneo o de lo que quieras..." required></textarea>
				</div>
				
					<div class="campo">
						<label for="emparejamiento">Sistema de emparejamiento</label>
						<select id="emparejamiento" name="emparejamiento" required>
							<option value="grupos_eliminatorias">Liga</option>
							<option value="eliminacion_directa">Eliminación directa</option>
							<option value="todos_contra_todos">Sistema suizo</option>
						</select>
					</div>
			
			</section>
			<section class="bloque">
				<h2>Equipos y participantes</h2>
				<div class="fila equipos">
					<div class="campo">
						<label for="cantidadEquipos">Cantidad de equipos</label>
						<div class="input-icono">
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<circle cx="9" cy="8" r="3"></circle>
								<path d="M3 19c0-3 2.5-5 6-5s6 2 6 5"></path>
								<circle cx="17" cy="9" r="2"></circle>
								<path d="M15 15c3 .2 5 1.7 5 4"></path>
							</svg>
							<input type="number" id="cantidadEquipos" name="cantidadEquipos" placeholder="Ej: 16" min="2" required>
						</div>
					</div>
					<div class="campo">
						<label for="jugadores">Jugadores por equipo</label>
						<div class="input-icono">
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<circle cx="9" cy="8" r="3"></circle>
								<path d="M3 19c0-3 2.5-5 6-5s6 2 6 5"></path>
							</svg>
							<input type="number" id="jugadores" name="jugadores" placeholder="Ej: 11" min="1" required>
						</div>
					
					</div>
					
				</div>
			</section>

			<section class="bloque">
				<h2>Fechas</h2>

				<div class="fila fechas">
					<div class="campo">
						<label for="fechaInicio">Fecha de inicio</label>
						<div class="input-icono">
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<rect x="3" y="5" width="18" height="16" rx="2"></rect>
								<path d="M16 3v4M8 3v4M3 10h18"></path>
							</svg>
							<input type="date" id="fechaInicio" name="fechaInicio" required>
						</div>
					</div>

					<div class="campo">
						<label for="fechaFin">Fecha de finalización</label>
						<div class="input-icono">
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<rect x="3" y="5" width="18" height="16" rx="2"></rect>
								<path d="M16 3v4M8 3v4M3 10h18"></path>
							</svg>
							<input type="date" id="fechaFin" name="fechaFin" required>
						</div>
					</div>
				</div>
			</section>

			<section class="bloque">
				<h2>Sede</h2>

				<div class="fila">
					<div class="campo">
						<label for="ubicacion">Ubicación</label>
						<div class="input-icono">
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<path d="M12 21s7-6.2 7-12A7 7 0 0 0 5 9c0 5.8 7 12 7 12z"></path>
								<circle cx="12" cy="9" r="2.5"></circle>
							</svg>
							<input type="text" id="ubicacion" name="ubicacion" placeholder="Ej: Ciudad, País" required>
						</div>
					</div>

					<div class="campo">
						<label for="sede">Sede</label>
						<div class="input-icono">
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<path d="M12 21s7-6.2 7-12A7 7 0 0 0 5 9c0 5.8 7 12 7 12z"></path>
								<circle cx="12" cy="9" r="2.5"></circle>
							</svg>
							<input type="text" id="sede" name="sede" placeholder="Ej: Nombre de club deportivo">
						</div>
					</div>
				</div>
			</section>

			<section class="bloque configuracion">
				<h2>Configuración</h2>

				<div class="campo">
					<label for="reglas">Reglas de equipo</label>
					<textarea id="reglas" name="reglas" placeholder="Agrega reglas especiales, formato de puntos, etc."></textarea>
				</div>
			</section>

			<button class="btn-crear" type="submit">CREAR TORNEO</button>
		</form>
	</main>
</body>
</html>
