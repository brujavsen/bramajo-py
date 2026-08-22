document.addEventListener('DOMContentLoaded', () => {
    const formLogin = document.getElementById('formLogin');

    if (!formLogin) return;

    formLogin.addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(formLogin);

        try {
            const respuesta = await fetch('/PROYECTO/bramajo-py/apps/controllers/loginControllers.php', {
                method: 'POST',
                body: formData
            });

            const resultado = await respuesta.json();

            if (resultado.success) {
                window.location.href = resultado.redirect;
            } else {
                alert('Error: ' + resultado.message);
            }
        } catch (error) {
            console.error('Error en la petición:', error);
            alert('Ocurrió un error al intentar iniciar sesión.');
        }
    });
});