<?php
session_start();
$usuarioLogueado=isset($_SESSION['usuario']);
?>
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
				<button class="filtro">Reciente</button>
				<button class="filtro">Inscripciones abiertas</button>
			</div>
		</section>
		<section class="popular">
			<h2 class="seccion-titulo">Popular</h2>
			<div class="torneos-grid">
				<article class="torneo-card">
					<img src="../../assets/Youth-soccer-indiana.jpg" alt="Sub 6 Caval">
					<div class="torneo-info">
						<p class="fecha">Fecha: 27/8 - 28/9</p>
						<h3>Sub 6 Caval</h3>
						<p class="ubicacion">📍 Av.juan-Palermo</p>
					</div>
				</article>
				<article class="torneo-card">
					<img src="../../assets/imagesDos.jpg" alt="Amistoso tenis">
					<div class="torneo-info">
						<p class="fecha">Fecha: 27/8 - 28/9</p>
						<h3>Amistoso tenis</h3>
						<p class="ubicacion">📍 Club Uruguay</p>
					</div>
				</article>
				<article class="torneo-card">
					<img src="../../assets/Youth-soccer-indiana.jpg" alt="Sub 6 Caval">
					<div class="torneo-info">
						<p class="fecha">Fecha: 27/8 - 28/9</p>
						<h3>Sub 6 Caval</h3>
						<p class="ubicacion">📍 Av.juan-Palermo</p>
					</div>
				</article>
				<article class="torneo-card">
					<img src="../../assets/images.jpg" alt="Ciclismo young">
					<div class="torneo-info">
						<p class="fecha">Fecha: 27/8 - 28/9</p>
						<h3>Ciclismo young</h3>
						<p class="ubicacion">📍 Av.juan-Palermo</p>
					</div>
				</article>
				<article class="torneo-card">
					<img src="../../assets/imagesDos.jpg" alt="Amistoso tenis">
					<div class="torneo-info">
						<p class="fecha">Fecha: 27/8 - 28/9</p>
						<h3>Amistoso tenis</h3>
						<p class="ubicacion">📍 Club Uruguay</p>
					</div>
				</article>
				<article class="torneo-card">
					<img src="../../assets/images.jpg" alt="Amistoso tenis">
					<div class="torneo-info">
						<p class="fecha">Fecha: 27/8 - 28/9</p>
						<h3>Amistoso tenis</h3>
						<p class="ubicacion">📍 Av.juan-Palermo</p>
					</div>
				</article>
			</div>
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
		<footer>
			<h3>BRAMAJO - Sistema de Gestión de Torneos</h3>
			<p1>
				telefono: +54 9 11 1234-5678 | email: info@bramajo.com  | 
			</p1>
			<p2>Dirección: Av. Siempre Viva 123 | Ciudad, País</p2>
			
			<p3>Redes sociales: bramajo en Facebook, @bramajo en Twitter, @bramajo en Instagram</p3>
			
			<p5>© 2024 Todos los derechos reservados</p5>
		</footer>	
	</main>
</body>
</html>