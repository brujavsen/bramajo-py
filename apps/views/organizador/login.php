<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Inicio de sesión</title>
		<link rel="stylesheet" href="login.css" />
	</head>

	<body>
		<header class="header">
        <img class="header__logo" src="../../assets/bramajo-logo.png" alt="bramajo logo" />
          <nav class="header__nav">

            <a class="nav__link" href="../publico/inicio.php">
                Continuar como invitado
            </a>
    </header>

		<main>
			<h1 class="gestion_titulo">INICIAR SESIÓN</h1>

			<section class="presentacion">
				<h2>Ingresa a tu cuenta para acceder a todos los torneos, competencias y
					eventos
				</h2>
				<p1>Por favor, ingresa tu correo y contraseña. </p1>
			</section>

			<section class="formulario">
				<h2>Iniciar Sesión</h2>

				<form>
					<label>Correo Electrónico:</label>
					<input type="email" placeholder="Ej: juan@ejemplo.com" />

					<label>Contraseña:</label>
					<input type="password" placeholder="**********" />

					<h3>
						¿No tienes una cuenta?
						<a id="registrarse" href="registro.php">Regístrate aquí</a>
					</h3>
				</form>
			</section>
			<button>
                <a class="link_gestion" href="../publico/inicio.php">
                    Iniciar Sesión
                </a>
			</button>
		</main>
		<footer>
			<p>BRAMAJO - Sistema de Gestión de Torneos</p>
		</footer>
	</body>
</html>
