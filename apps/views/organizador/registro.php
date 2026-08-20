<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Registro</title>
		<link rel="stylesheet" href="../base/base.css" />
		<link rel="stylesheet" href="registro.css" />
	</head>

	<body>
		<header class="header">
        <img class="header__logo" src="../../assets/bramajo-logo.png" alt="bramajo logo" />
        
    </header>
		<main>
			<h1 class="gestion_titulo">REGISTRARSE</h1>

			<section class="presentacion">
				<h2>Crea tu cuenta y accede a todos los torneos, competencias y eventos</h2>
				<p1>Solo deberas ingresar tu nombre, correo y contraseña. </p1>
			</section>

			<section class="formulario">
				<h2>Crear Cuenta</h2>

				<form>
					<label>Nombre:</label>
					<input type="text" placeholder="Ej: Juan Pérez" />

					<label>Correo Electrónico:</label>
					<input type="email" placeholder="Ej: juan@ejemplo.com" />

					<label>Contraseña:</label>
					<input type="password" placeholder=" " />

					<h3>
						¿Ya tienes una cuenta?
						<a id="iniciarSesion" href="login.php">Inicia sesión</a>
					</h3>
				</form>
			</section>
			<button><a class="link_gestion" href="../organizador/login.php">
                    Crear cuenta
                </a>
			</button>
		</main>
		<footer>
			<p>BRAMAJO - Sistema de Gestión de Torneos</p>
		</footer>
	</body>
</html>
