<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="perfil.css">
</head>
<body>
    <?php include __DIR__ . '/../base/Header.php'; ?>
    <div class="container">
        <section class="card">
            <img class="card__banner" src="../../assets/fondo-perfil-ejemplo.jpg" alt="Fondo de la carta" class="fondoCarta" >

            <img class="card__profile" src="../../assets/image-perfil-ejemplo.jpg" alt="Foto de perfil" class="fotoPerfil">

            <p class="card__name">Cornu Copia</p>
            <p class="card__job">Coordinador de AUF</p>

            <section class="card__info">
                <p>Montevideo, Uruguay</p>
                <p>1500 partidos organizados</p>
            </section>
            <div class="card__desc">
                <h2>Biografía:</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis explicabo sint sunt impedit laboriosam dolores sapiente, autem perspiciatis veniam dignissimos aperiam quos harum soluta libero? Dolore quibusdam saepe ea autem!
                </p>
            </div>
            <section class="card__follow">
                <div class="follow__num">
                    <div class="num">
                        <p>67</p>
                        <p>Seguidores</p>
                    </div>
    
                    <div class="num">
                        <p>1,000</p>
                        <p>Seguidos</p>
                    </div>
                </div>

                <button id="botonSeguir">Seguir</button>
            </section>
        </section>
    </div>
</body>
</html>