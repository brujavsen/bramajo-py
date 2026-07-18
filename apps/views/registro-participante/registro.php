<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
     <link rel="stylesheet" href="../../../apps/templates/base.css" />
     <link rel="stylesheet" href="registro.css" />
</head>

<body>
    <?php include __DIR__ . '/../base/Header.php'; ?>
    <main>
        <h1>REGISTRARSE</h1>

        <section id="presentacion">
            <h2>Crea tu cuenta y accede a todos los torneos, competencias y eventos</h2>
            <p1>Solo deberas ingresar tu nombre, correo y contraseña.
            </p1>
        </section>

        <section id="formulario">
            <h2>Crear Cuenta</h2>

            <form>
                <label>Nombre:</label>
                <input type="text" placeholder="Ej: Juan Pérez">

                <label>Correo Electrónico:</label>
                <input type="email" placeholder="Ej: juan@ejemplo.com">

                <label>Contraseña:</label>
                <input type="password" placeholder=" ">


                
                <h3>¿Ya tienes una cuenta? <a id="iniciarSesion" href="login.php">Inicia sesión</a></h3>
            </form>
        </section>
<button>Crear Cuenta</button>
    </main>
</body>

</html>