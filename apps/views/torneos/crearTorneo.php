<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="crearTorneo.css">
    <link rel="stylesheet" href="views/creartorneo/crearTorneo.css">
    <link rel="stylesheet" href="crearTorneo.css">
    <link rel="stylesheet" href="../../../apps/templates/base.css" />

</head>

<body>
    <?php include __DIR__ . '/../base/Header.php'; ?>

    <main>
        <h1>CREA TU TORNEO</h1>
        <p>Crea y administra tus competiciones con BRAMAJO</p>

        <section id="presentacion">
            <h2>Crea tu torneo fácilmente</h2>
            <p1>Organiza competencias deportivas, eSports o cualquier evento.
                Completa el formulario y comienza a gestionar participantes.
            </p1>
        </section>

        <section id="formulario">
            <h2>Crear Torneo</h2>

            <form>
                <label>Nombre del Torneo:</label>
                <input type="text" placeholder="Ej: Copa Verano">

                <label>Deporte:</label>
                <input type="text" placeholder="Ej: Fútbol">

                <label>Fecha:</label>
                <input type="date">

                <label>Cantidad de Equipos:</label>
                <input type="number" min="2">


               
            </form>
        </section>
 <button>Crear Torneo</button>
    </main>
</body>

</html>