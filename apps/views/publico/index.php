 <?php
session_start();
?>
 
 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>BRAMAJO</title>
     <link rel="stylesheet" href="index.css" />
 </head>

 <body>

     <header class="header">

         <img class="header__logo" src="../../assets/bramajo-logo.png" alt="bramajo logo" />

         <nav class="header__nav">

             <li><a class="nav__link" href="index.php">Portada</a></li>
             <li><a class="nav__link" href="#quienes_somos">Quienes somos</a></li>
             <li><a class="nav__link" href="#contenido">Contenido</a></li>
             <li><a class="nav__link" href="../index/contacto.html">Contacto</a></li>

         </nav>
     </header>
     <main>
         <section id="gestion" class="gestion">

             <h2 class="gestion_titulo">
                 Gestiona torneos de forma simple
             </h2>

             <p class="gestion_desc">
                 Organiza competencias deportivas, mentales y electrónicas desde una única plataforma.
             </p>
                <nav class="boton_comenzar">
                    <?php if (isset($_SESSION['usuario_id'])):?>
                        <a class="link_comenzar" href="..\organizador\inicio.php">
                            Comenzar
                        </a>
                        <?php else: ?>
                            <a class= "link_comenzar" href= "..\publico\inicioP.php">
                                Comenzar
                            </a>
                        <?php endif; ?>
             </nav>

         </section>

         <section id="quienes_somos" class="presentacion">

             <h1 class="titulo1">¿Quiénes somos?</h1>

             <p class="somos">
                 Somos <strong>BRAMAJO</strong>, un equipo de estudiantes que desarrolló
                 una plataforma pensada para facilitar la organización y participación
                 en torneos deportivos.
             </p>

             <p class="somos">
                 Nuestro objetivo es crear un espacio sencillo y fácil de usar donde
                 los usuarios puedan crear torneos, participar en ellos, consultar
                 resultados y mantenerse informados sobre los diferentes encuentros.
             </p>

         </section>


         <section class="sobre_bramajo">

             <h2 class="titulo2">¿Qué es BRAMAJO?</h2>

             <p class="somos">
                 BRAMAJO es una aplicación web creada para organizar torneos de una
                 manera más simple y ordenada. La plataforma permite gestionar
                 diferentes aspectos de un torneo desde un mismo lugar.
             </p>

             <div class="caracteristicas">

                 <div class="card">
                     <h3 class="titulo3">🏆 Crear torneos</h3>
                     <p class="somos">
                         Los usuarios pueden crear y organizar sus propios torneos.
                     </p>
                 </div>

                 <div class="card">
                     <h3 class="titulo3">⚽ Participar</h3>
                     <p class="somos">
                         Los usuarios pueden encontrar torneos y participar en ellos.
                     </p>
                 </div>

                 <div class="card">
                     <h3 class="titulo3">📊 Resultados</h3>
                     <p class="somos">
                         Permite consultar los resultados y el desarrollo de los
                         diferentes torneos.
                     </p>
                 </div>

             </div>

         </section>

         <section class="objetivo">

             <h2 class="titulo2">Nuestro objetivo</h2>

             <p class="somos">
                 Buscamos que BRAMAJO sea una herramienta práctica, clara y accesible,
                 que permita organizar torneos sin complicaciones y que cualquier
                 usuario pueda utilizar fácilmente.
             </p>

         </section>
         <section id="contenido">
             <section">
             
             <h2 class="gestion_titulo">
                 Informacion
                </h2>
            </section>
        <!--  SECTION 1 -->
         <section class="contenido">
             <div class="descripcion_contenido">

                 <h1 class="titulo2">Gestionar torneos de forma simple</h1>

                 <p class="contenidos">
                     BRAMAJO permite organizar competencias deportivas,
                     torneos y encuentros desde una única plataforma.
                     La idea es hacer que organizar y participar sea
                     rápido, sencillo y accesible para todos.
                 </p>

             </div>

             <img class="contenido_img"
                 src="../../assets/imagen 1.jpeg"
                 alt="Organización de un torneo">

         </section>
         <!-- SECTION 2 -->

         <section class="contenido_invertido">

             <div class="descripcion_contenido">
                 <h2 class="titulo2">Se parte del público</h2>

                 <p class="contenidos">
                     Seguí cada momento de la competencia de forma
                     simple y rápida. Consultá los próximos partidos,
                     resultados, posiciones y más información del torneo
                     sin depender de mensajes o publicaciones externas.
                 </p>
             </div>

             <img
                 class="contenido_img"
                 src="../../assets/imagen 2.jpeg"
                 alt="Resultados de un torneo">

         </section>

         <!-- SECTION 3 -->
         <section class="contenido">

             <div class="descripcion_contenido">

                 <h2 class="titulo2">Para participar</h2>

                 <p class="contenidos">
                     Participá en torneos creados por los organizadores
                     y disfrutá de todas las funcionalidades que ofrece
                     BRAMAJO para seguir y formar parte de una competencia.
                 </p>

             </div>

             <img class="contenido_img"
                 src="../../assets/imagen 3.jpeg"
                 alt="Participantes de un torneo">
         </section>


         <!-- SECTION 4 -->

         <section class="contenido_invertido">

             <div class="descripcion_contenido">

                 <h2 class="titulo2">Crear tu torneo</h2>

                 <p class="contenidos">
                     Organizá y creá tu torneo de forma gratuita y fácil.
                     Podés crear tu torneo donde quieras y en cualquier
                     momento, configurando la información necesaria para
                     que los participantes puedan conocerlo.
                 </p>

             </div>
             <img class="contenido_img"
                 src="../../assets/imagen 4.jpeg"
                 alt="Crear un torneo">
         </section>

         <section class="tipos">

             <h2 class="titulo1">Tipos de torneos</h2>

             <div class="tipos_">

                 <article class="tipo">

                     <h3 class="titulo3">Torneo web</h3>

                     <p class="contenidos">
                         Competencias organizadas completamente
                         desde la plataforma.
                     </p>

                 </article>


                 <article class="tipo">

                     <h3 class="titulo3">Torneo de mesa</h3>

                     <p class="contenidos">
                         Torneos de juegos de mesa y diferentes
                         tipos de competencias.
                     </p>

                 </article>


                 <article class="tipo">

                     <h3 class="titulo3">Deporte físico</h3>

                     <p class="contenidos">
                         Competencias deportivas como fútbol,
                         básquet, vóley y otros deportes.
                     </p>

                 </article>


                 <article class="tipo">

                     <h3 class="titulo3">Otros</h3>

                     <p class="contenidos">
                         Cualquier otra competencia que pueda
                         organizarse mediante BRAMAJO.
                     </p>

                 </article>

             </div>

         </section>

     </main>


     <footer>
         <p>BRAMAJO - Sistema de Gestión de Torneos</p>
     </footer>

 </body>

 </html>