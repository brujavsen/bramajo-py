
function mostrarventana() {

    document.getElementById("ventana").classList.add("mostrar");
}

function cerrarVentana() {
            document.getElementById("ventana").classList.remove("mostrar");
}

document.getElementById("formulariounirse").addEventListener("submit", function(evento) {
    evento.preventDefault();

    const nombre = document.getElementById("nombre").value;
    const edad = document.getElementById("edad").value;
    const sexo = document.getElementById("sexo").value;

    if (document.getElementById("edad").value < 10 || document.getElementById("edad").value > 85) {
        alert("La edad debe estar entre 10 y 85 años");
        return;
    }
     if (
            nombre == "" ||
            edad == "" ||
            sexo == "" ||
            experiencia == ""
        ) {
            alert("Completá todos los datos");
        } else {
            alert("Solicitud enviada correctamente");

            document.getElementById("formularioUnirse").reset();
            cerrarVentana();
            
}
        
    });

