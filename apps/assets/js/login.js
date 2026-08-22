// Esperamos a que toda la página HTML termine de cargarse.
document.addEventListener('DOMContentLoaded', () => {

    // Buscamos el formulario de inicio de sesión por su ID.
    const formLogin = document.getElementById('formLogin');

    // Si el formulario no existe en la página,
    // detenemos la ejecución del código.
    if (!formLogin) return;


    // Detectamos cuando el usuario intenta enviar
    // el formulario de inicio de sesión.
    formLogin.addEventListener('submit', async (e) => {

        // Evitamos que el formulario se envíe de la manera tradicional.
        // Esto evita que la página se recargue.
        e.preventDefault();


        // Obtenemos todos los datos que el usuario escribió
        // en el formulario.
        const formData = new FormData(formLogin);


        try {

            // Enviamos los datos al servidor usando fetch().
            // El archivo PHP se encarga de comprobar
            // si los datos de inicio de sesión son correctos.
            const respuesta = await fetch(
                '/PROYECTO/bramajo-py/apps/controllers/loginControllers.php',
                {
                    // Utilizamos POST porque estamos enviando
                    // información al servidor.
                    method: 'POST',

                    // Enviamos los datos del formulario.
                    body: formData
                }
            );


            // Esperamos la respuesta del servidor
            // y la convertimos de JSON a un objeto de JavaScript.
            //
            // Por ejemplo, PHP podría responder:
            //
            // {
            //     "success": true,
            //     "redirect": "inicio.php"
            // }
            const resultado = await respuesta.json();


            // Comprobamos si el inicio de sesión fue exitoso.
            if (resultado.success) {

                // Si fue correcto, enviamos al usuario
                // a la dirección indicada por el servidor.
                window.location.href = resultado.redirect;

            } else {

                // Si el inicio de sesión falló,
                // mostramos el mensaje de error enviado por PHP.
                alert('Error: ' + resultado.message);
            }


        } catch (error) {

            // Si ocurre algún problema durante la petición,
            // mostramos el error en la consola para poder revisarlo.
            console.error('Error en la petición:', error);

            // Mostramos un mensaje al usuario indicando
            // que ocurrió un problema.
            alert('Ocurrió un error al intentar iniciar sesión.');
        }
    });
});