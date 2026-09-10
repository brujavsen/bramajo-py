<?php

session_start();

require_once "datosTorneos.php";

/* Recibe y valida el ID enviado por la URL */
$idTorneo = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

/* Si el ID no existe, se detiene la página */
if (
    $idTorneo === false ||
    $idTorneo === null ||
    !isset($torneos[$idTorneo])
) {
    http_response_code(404);
    die("El torneo solicitado no existe.");
}

/* Obtiene únicamente el torneo seleccionado */
$torneoSeleccionado = $torneos[$idTorneo];

/* Obtiene la pestaña seleccionada */
$pestana = $_GET["pestana"] ?? "detalles";

/* Lista de pestañas permitidas */
$pestanasPermitidas = [
    "detalles",
    "participantes",
    "resultados"
];

/* Evita que se utilice una pestaña inexistente */
if (!in_array($pestana, $pestanasPermitidas, true)) {
    $pestana = "detalles";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?= htmlspecialchars($torneoSeleccionado["nombre"]) ?> - BRAMAJO
    </title>

    <link rel="stylesheet" href="infoTorneos.css">
</head>

<body>

    <header class="header">

        <img
            class="header__logo"
            src="../../assets/bramajo-logo.png"
            alt="Logo de BRAMAJO"
        >

        <nav class="header__nav">

            <a class="nav__link" href="torneos.php">
                ← Volver a torneos
            </a>

            <a class="nav__link" href="soporte.php">
                Soporte
            </a>

        </nav>

    </header>

    <main class="contenido-principal">

        <section class="encabezado-torneo">

            <img
                class="encabezado-torneo__imagen"
                src="<?= htmlspecialchars($torneoSeleccionado["imagen"]) ?>"
                alt="<?= htmlspecialchars($torneoSeleccionado["nombre"]) ?>"
            >

            <div class="encabezado-torneo__informacion">

                <p class="estado-torneo">
                    <?= htmlspecialchars(
                        $torneoSeleccionado["detalles"]["estado"]
                    ) ?>
                </p>

                <h1>
                    <?= htmlspecialchars($torneoSeleccionado["nombre"]) ?>
                </h1>

                <p class="descripcion-torneo">
                    <?= htmlspecialchars(
                        $torneoSeleccionado["detalles"]["descripcion"]
                    ) ?>
                </p>

            </div>

        </section>

        <!-- Pestañas -->

        <nav class="pestanas">

            <a
                class="pestana <?= $pestana === "detalles" ? "activa" : "" ?>"
                href="infoTorneos.php?id=<?= $idTorneo ?>&pestana=detalles"
            >
                Detalles
            </a>

            <a
                class="pestana <?= $pestana === "participantes" ? "activa" : "" ?>"
                href="infoTorneos.php?id=<?= $idTorneo ?>&pestana=participantes"
            >
                Participantes
            </a>

            <a
                class="pestana <?= $pestana === "resultados" ? "activa" : "" ?>"
                href="infoTorneos.php?id=<?= $idTorneo ?>&pestana=resultados"
            >
                Resultados
            </a>

        </nav>

        <section class="contenido-pestana">

            <?php if ($pestana === "detalles"): ?>

                <h2>Detalles del torneo</h2>

                <div class="detalles-grid">

                    <article class="detalle">
                        <h3>Deporte</h3>

                        <p>
                            <?= htmlspecialchars(
                                $torneoSeleccionado["detalles"]["deporte"]
                            ) ?>
                        </p>
                    </article>

                    <article class="detalle">
                        <h3>Fecha</h3>

                        <p>
                            <?= htmlspecialchars(
                                $torneoSeleccionado["detalles"]["fecha"]
                            ) ?>
                        </p>
                    </article>

                    <article class="detalle">
                        <h3>Hora</h3>

                        <p>
                            <?= htmlspecialchars(
                                $torneoSeleccionado["detalles"]["hora"]
                            ) ?>
                        </p>
                    </article>

                    <article class="detalle">
                        <h3>Lugar</h3>

                        <p>
                            <?= htmlspecialchars(
                                $torneoSeleccionado["detalles"]["lugar"]
                            ) ?>
                        </p>
                    </article>

                    <article class="detalle detalle-grande">
                        <h3>Estado</h3>

                        <p>
                            <?= htmlspecialchars(
                                $torneoSeleccionado["detalles"]["estado"]
                            ) ?>
                        </p>
                    </article>

                </div>

            <?php elseif ($pestana === "participantes"): ?>

                <h2>Participantes</h2>

                <?php if (empty($torneoSeleccionado["participantes"])): ?>

                    <p class="mensaje-vacio">
                        Todavía no hay participantes registrados.
                    </p>

                <?php else: ?>

                    <div class="participantes-lista">

                        <?php foreach (
                            $torneoSeleccionado["participantes"] as $numero => $participante
                        ): ?>

                            <article class="participante">

                                <span class="participante__numero">
                                    <?= $numero + 1 ?>
                                </span>

                                <p>
                                    <?= htmlspecialchars($participante) ?>
                                </p>

                            </article>

                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>

            <?php elseif ($pestana === "resultados"): ?>

                <h2>Resultados</h2>

                <?php if (empty($torneoSeleccionado["resultados"])): ?>

                    <p class="mensaje-vacio">
                        Todavía no hay resultados disponibles.
                    </p>

                <?php else: ?>

                    <div class="resultados-lista">

                        <?php foreach (
                            $torneoSeleccionado["resultados"] as $resultado
                        ): ?>

                            <?php if (
                                isset(
                                    $resultado["participante1"],
                                    $resultado["participante2"],
                                    $resultado["puntaje1"],
                                    $resultado["puntaje2"]
                                )
                            ): ?>

                                <!-- Resultado de un partido entre dos participantes -->

                                <article class="resultado">

                                    <div class="resultado__participante">
                                        <p>
                                            <?= htmlspecialchars(
                                                $resultado["participante1"]
                                            ) ?>
                                        </p>

                                        <strong>
                                            <?= htmlspecialchars(
                                                (string) $resultado["puntaje1"]
                                            ) ?>
                                        </strong>
                                    </div>

                                    <span class="resultado__separador">
                                        VS
                                    </span>

                                    <div class="resultado__participante">
                                        <p>
                                            <?= htmlspecialchars(
                                                $resultado["participante2"]
                                            ) ?>
                                        </p>

                                        <strong>
                                            <?= htmlspecialchars(
                                                (string) $resultado["puntaje2"]
                                            ) ?>
                                        </strong>
                                    </div>

                                </article>

                            <?php elseif (
                                isset(
                                    $resultado["participante"],
                                    $resultado["puntaje"]
                                )
                            ): ?>

                                <!-- Resultado individual con puntaje -->

                                <article class="resultado-individual">

                                    <p>
                                        <?= htmlspecialchars(
                                            $resultado["participante"]
                                        ) ?>
                                    </p>

                                    <strong>
                                        <?= htmlspecialchars(
                                            (string) $resultado["puntaje"]
                                        ) ?>
                                    </strong>

                                </article>

                            <?php elseif (
                                isset(
                                    $resultado["participante"],
                                    $resultado["resultado"]
                                )
                            ): ?>

                                <!-- Resultado individual, por ejemplo natación -->

                                <article class="resultado-individual">

                                    <div>
                                        <p>
                                            <?= htmlspecialchars(
                                                $resultado["participante"]
                                            ) ?>
                                        </p>

                                        <?php if (isset($resultado["posicion"])): ?>

                                            <span>
                                                Posición:
                                                <?= htmlspecialchars(
                                                    (string) $resultado["posicion"]
                                                ) ?>
                                            </span>

                                        <?php endif; ?>
                                    </div>

                                    <strong>
                                        <?= htmlspecialchars(
                                            (string) $resultado["resultado"]
                                        ) ?>
                                    </strong>

                                </article>

                            <?php endif; ?>

                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>

            <?php endif; ?>

        </section>

    </main>

</body>
</html>