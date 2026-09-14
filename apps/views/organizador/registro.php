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
		<p class="gestion_registro">
		Completa los datos y campos obligatorios para un registro exitoso.
    	</p>
			<form class="formulario" id="formRegistro">
				<p id="mensajeError"></p>
				<div class="datos">
					<label for="nombre">Nombre</label>
					<input type="text" id="nombre" name="nombre" placeholder="Ej: Nombre Apellido" required>
				</div>
				<div class="datos">
					<label for="correo">Correo</label>
					<input type="email" id="correo" name="correo" placeholder="Ej: Nombre1234@gmail.com" required>
				</div>
				<div class="datos">
					<label for="password">Contraseña</label>
					<div class="input-password">
						<input type="password" id="password" name="password" placeholder="Ej: 12345678" required>
						<button type="button" id="mostrarPassword">👁</button>
					</div>
				</div>
				<div class="datos"> 
					<label for="confirmar">Confirmar contraseña</label>
					<div class="input-password">
						<input type="password" id="confirmar" name="confirmar" placeholder="Ej: 12345678" required>
					</div>
				</div>
				<button class="btn-registrar" type="submit">
					REGISTRAR
				</button>
				<h3>
                        ¿Ya tienes cuenta?
                        <a id="iniciarSesion" href="login.php">Inicia sesión aquí</a>
                    </h3>
			</form>
		</main>
		<footer>
		    <h3>BRAMAJO - Sistema de Gestión de Torneos</h3>
			<p1>
				telefono: +598 96 123 456 | email: info@bramajo.com  | 
			</p1>
			<p2>Dirección: Ejido 1275 | Montevideo, Uruguay</p2>
			
			<p3>Redes sociales: bramajo en Facebook, @bramajo en Twitter, @bramajo en Instagram</p3>
			
			<p5>© 2024 Todos los derechos reservados</p5>
		</footer>
		<script src="../../assets/js/registro.js"></script>
	</body>
</html>