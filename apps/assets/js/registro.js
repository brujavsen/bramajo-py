document.addEventListener('DOMContentLoaded', () => {
    const formRegistro = document.getElementById('formRegistro');

    if (!formRegistro) return;

    formRegistro.addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(formRegistro);

        try {
            const respuesta = await fetch('/PROYECTO/bramajo-py/apps/controllers/usuarioControllers.php', {
                method: 'POST',
                body: formData
            });

            if (!respuesta.ok) {
                throw new Error(`Error en el servidor: ${respuesta.status} ${respuesta.statusText}`);
            }

            const resultado = await respuesta.json();

            if (resultado.success) {
                alert(resultado.message);
                formRegistro.reset();
                window.location.href = 'login.php';
            } else {
                alert('Error: ' + resultado.message);
            }
        } catch (error) {
            console.error('Error en la solicitud:', error);
            alert('No se pudo conectar con el servidor.');
        }
    });
});