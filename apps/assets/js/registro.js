
// Esperamos a que toda la página HTML termine de cargarse.
document.addEventListener('DOMContentLoaded', () => {
	// Buscamos el formulario de registro por su ID en la página PHP.
	const formRegistro = document.getElementById('formRegistro');
	const OJITO = document.getElementById('mostrarPassword');
	
	
	// Si no encontramos el formulario, detenemos el código.
	// Esto evita que JavaScript intente trabajar con un elemento que no existe.
	if (!formRegistro) return;

	// Detectamos cuando el usuario intenta enviar el formulario.
	formRegistro.addEventListener('submit', async (e) => {
		// Evitamos que el formulario se envíe por defecto.
		// Sin esto, al enviar se recargaría la página.
		e.preventDefault();

		const nombre = document.getElementById('nombre').value.trim();
		const correo = document.getElementById('correo').value.trim();
		const password = document.getElementById('password').value;
		const confirmar = document.getElementById('confirmar').value;
		const mensajeError = document.getElementById('mensajeError');

		// Limpiamos cualquier mensaje de error anterior.
		mensajeError.textContent = '';

		// Validamos que el nombre tenga al menos 2 caracteres.
		if (nombre.length < 2) {
			mensajeError.textContent = 'El nombre debe tener al menos 2 caracteres.';
			return;
		}

		// Validamos que el correo tenga un formato válido.
		const correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

		if (!correoRegex.test(correo)) {
			mensajeError.textContent = 'Por favor, ingresa un correo electrónico válido.';
			return;
		}

		// Validamos que la contraseña tenga al menos 8 caracteres.
		if (password.length < 8) {
			mensajeError.textContent = 'La contraseña debe tener al menos 8 caracteres.';
			return;
		}

		// Comprobamos que las dos contraseñas coincidan.
		if (password !== confirmar) {
			mensajeError.textContent = 'Las contraseñas no coinciden.';
			return;
		}

		// FormData toma automáticamente todos los datos
		// que el usuario escribió dentro del formulario.
		const formData = new FormData(formRegistro);

		try {
			// Enviamos los datos del formulario al servidor mediante fetch().
			// La dirección apunta al archivo PHP que procesa el registro.
			const respuesta = await fetch('/bramajo-py/apps/controllers/usuarioControllers.php', {
				// Usamos POST porque estamos enviando información al servidor.
				method: 'POST',

				// Enviamos los datos que obtuvimos del formulario.
				body: formData
			});

			// Comprobamos si el servidor respondió correctamente.
			if (!respuesta.ok) {
				throw new Error(`Error en el servidor: ${respuesta.status} ${respuesta.statusText}`);
			}

			// Esperamos la respuesta del servidor y la convertimos desde JSON.
			const resultado = await respuesta.json();

			// Comprobamos si el servidor indica que el registro fue correcto.
			if (resultado.success) {
				// Mostramos el mensaje que envió el servidor.
				alert(resultado.message);

				// Limpiamos todos los campos del formulario.
				formRegistro.reset();

				// Enviamos al usuario a la página de inicio de sesión.
				window.location.href = 'login.php';
			} else {
				// Si el servidor indica que hubo un problema,
				// mostramos el mensaje dentro del formulario.
				mensajeError.textContent = resultado.message;
			}
		} catch (error) {
			// Si ocurre algún problema durante la comunicación
			// con el servidor, mostramos el error en la consola.
			console.error('Error en la solicitud:', error);

			// Mostramos un mensaje de error dentro del formulario.
			mensajeError.textContent = 'No se pudo conectar con el servidor.';
		}
	});

	OJITO.addEventListener('click', () => {
		const passwordInput = document.getElementById('password');
		const Confirmar = document.getElementById('confirmar');
		passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
		Confirmar.type = Confirmar.type === 'password' ? 'text' : 'password';
	});
});