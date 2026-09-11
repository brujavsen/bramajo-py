// Esperamos a que toda la página HTML termine de cargarse.
document.addEventListener('DOMContentLoaded', () => {

	// Buscamos el formulario de inicio de sesión por su ID.
	const formIniciarS = document.getElementById('formIniciarS');
	const OJITO = document.getElementById('mostrarPassword');
	// Si no encontramos el formulario, detenemos el código.
	// Esto evita errores si el archivo JS se carga en otra página.
	if (!formIniciarS) return;

	// Detectamos cuando el usuario intenta enviar el formulario.
	formIniciarS.addEventListener('submit', async (e) => {

		// Evitamos que el formulario se envíe de la manera tradicional.
		// Esto permite procesarlo mediante JavaScript y fetch().
		e.preventDefault();

		// Obtenemos el correo que escribió el usuario.
		// trim() elimina espacios innecesarios al principio y al final.
		const correo = document.getElementById('correo').value.trim();

		// Obtenemos la contraseña.
		const password = document.getElementById('password').value;

		// Buscamos el elemento donde mostraremos los mensajes de error.
		const mensajeError = document.getElementById('mensajeError');

		// Limpiamos cualquier mensaje de error anterior.
		mensajeError.textContent = '';

		// Expresión regular para comprobar que el correo
		// tenga un formato básico válido.
		const correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

		// Comprobamos que el correo tenga un formato válido.
		if (!correoRegex.test(correo)) {

			// Mostramos el mensaje de error.
			mensajeError.textContent = 'Por favor, ingresa un correo electrónico válido.';

			// Detenemos el envío del formulario.
			return;
		}

		// Comprobamos que la contraseña tenga al menos 8 caracteres.
		if (password.length < 8) {

			// Mostramos el mensaje de error.
			mensajeError.textContent = 'La contraseña debe tener al menos 8 caracteres.';

			// Detenemos el envío del formulario.
			return;
		}

		// FormData toma automáticamente los datos
		// que tienen atributo name dentro del formulario.
		const formData = new FormData(formIniciarS);

		try {

			// Enviamos los datos al controlador PHP mediante fetch().
			const respuesta = await fetch('../controllers/loginControllers.php', {

				// Usamos POST porque estamos enviando información al servidor.
				method: 'POST',

				// Enviamos los datos del formulario.
				body: formData
			});

			// Comprobamos si el servidor respondió correctamente.
			// Por ejemplo, un error 404 o 500 hará que esto sea falso.
			if (!respuesta.ok) {

				// Generamos un error con el código recibido.
				throw new Error(`Error en el servidor: ${respuesta.status}`);
			}

			// Convertimos la respuesta del servidor desde JSON
			// a un objeto que podamos utilizar en JavaScript.
			const resultado = await respuesta.json();

			// Comprobamos si el servidor indica que el inicio de sesión
			// se realizó correctamente.
			if (resultado.success) {

				// Mostramos el mensaje de éxito.
				mensajeError.style.color = 'green';
				mensajeError.textContent = resultado.message;

				// Esperamos un segundo antes de redirigir al usuario.
				setTimeout(() => {

					// Enviamos al usuario a la página de inicio.
					window.location.href = '../publico/inicio.php';

				}, 1000);

			} else {

				// Si el servidor indica que hubo un problema,
				// mostramos el mensaje que envió.
				mensajeError.style.color = 'crimson';
				mensajeError.textContent = resultado.message;
			}

		} catch (error) {

			// Mostramos el error en la consola para poder
			// encontrar el problema durante el desarrollo.
			console.error('Error en la solicitud:', error);

			// Mostramos un mensaje al usuario.
			mensajeError.style.color = 'crimson';
			mensajeError.textContent = 'No se pudo conectar con el servidor.';
		}
	});
OJITO.addEventListener('click', () => {
		const passwordInput = document.getElementById('password');
		passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password'
	});
});