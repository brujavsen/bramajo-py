<?php
    $usuarioLogueado = true;
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Inicio</title>
		<link rel="stylesheet" href="inicio.css" />
	</head>
	<body>
		<header class="header">
        <img class="header__logo" src="../../assets/bramajo-logo.png" alt="bramajo logo" />
        
        <nav class="header__nav">
            <a class="nav__link" href="../publico/index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">

                </svg>
               <- Volver
            </a>
      

             <a class="nav__link" href="../publico/torneos.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
               Ver Torneos
            </a>
      

             <a class="nav__link" href="../publico/soporte.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                Soporte
            </a>

            <button class="btn-registro" onclick="window.location.href='../organizador/registro.php'">
                Registrate ya
            </button>
        </nav>
    </header>
 
<main>

    <h1>Bienvenid@ a BRAMAJO</h1>
    <p>
        
        BRAMAJO es una plataforma de gestión de torneos deportivos que permite a los organizadores crear y administrar torneos de manera eficiente. Los participantes pueden registrarse, consultar información sobre los torneos y mantenerse actualizados con las últimas noticias y resultados.
    </P>

    <div class="cards">
        <div class="card">
            <img  src="../../assets/Youth-soccer-indiana.jpg" alt="Torneo 1" />
            <div class="contenido-card">
                <p> Activo ahora 🟢 </p>
            <h2>Torneo de Fútbol</h2>
            <p>📍 Av.Italia-Palermo</p>
            </div>
        </div>
        <div class="card">
            <img  src="../../assets/imagesUno.jpg" alt="Torneo 2" />
            <div class="contenido-card">
                <p> Activo ahora 🟢 </p>
            <h2>Torneo de Baloncesto</h2>
            <p>📍 Av.Carlos Maria </p>
            </div>
        </div>
        <div class="card"> 
              <img  src="../../assets/imagesDos.jpg" alt="Torneo 3" />
              <div class="contenido-card">
                <p> Activo ahora 🟢 </p>
                <h2>Torneo de Tenis</h2>
                <p>📍 Club Deportivo</p>
             </div>
        </div>
        <div class="card">
            <img  src="../../assets/images.jpg" alt="Torneo 4" />
            <div class="contenido-card">
                <p> Activo ahora 🟢 </p>
            <h2>Torneo de Natación</h2>
            <p>📍 Piscina Municipal</p>
            </div>
        </div>
    </div>



   <button class= "btn-torneo" onclick="window.location.href='../publico/torneos.php'">
    Ver mas torneos
</button>

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
