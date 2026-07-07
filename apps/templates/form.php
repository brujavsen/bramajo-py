<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap');
        :root {
            --amarillo: #FFBF00;
            --azul:#4274D9;
            --blanco: #FFFF;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: var(--azul);
            width: 100%;
            height: 100vh;
            display: grid;
            place-items: center;
            font-family: "Cinzel", serif;
        }

        .form {
            margin: 0 auto;
            width: 500px;
            height:  600px;
            background-color: var(--blanco);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            box-shadow: 5px 5px 20px black;
        }
        .form__group {
            display: flex;
            flex-direction: column;
            width: 80%;
        }
        .form__title {
            font-size: 2rem;
            color: var(--azul);
        }
        .form__label {
            font-size: 1.2rem;
            color: var(--azul);
            margin-top: 20px;
        }
        .form__input {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #eee;
            box-shadow: 1px 1px 5px black;
            border-radius: 3px;
            outline: none;
        }
        .form__button {
            font-family: "Cinzel", serif;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: var(--amarillo);
            font-weight: bold;
            border: none;
            box-shadow: 1px 1px 2px black;
            border-radius: 5px;
            cursor: pointer;
            transition: all .3s ease-in-out;
            animation: rotate 1s infinite alternate;
        }
        .form__button:hover {
            padding: 10px 50px;
            background-color: #bb8d00;
        }
        @keyframes rotate {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1.2);
            }
        }
    </style>
</head>
<body>
    <form class="form">
        <h2 class="form__title">Formulario de Registro</h2>
        <div class="form__group">
            <label for="nombre" class="form__label">Nombre:</label>
            <input type="text" id="nombre" class="form__input" name="nombre">
            <label for="email" class="form__label">Email:</label>
            <input type="email" id="email" class="form__input" name="email">
            <label for="password" class="form__label">Contraseña:</label>
            <input type="password" id="password" class="form__input" name="password">
        </div>
        <button type="submit" class="form__button">Registrar</button>
    </form>
</body>
</html>