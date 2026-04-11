document.getElementById("btnWhatsapp").addEventListener("click", function () {
   

    const numero = "3874499804";

    // Obtener valores de los inputs
    const nombre = document.getElementById("nombre").value;
    const asunto = document.getElementById("asunto").value;
    const fecha = document.getElementById("fecha").value;
    const mensaje = document.getElementById("mensaje").value;

    // Construir el texto con encodeURIComponent para que se envíe correctamente
    const texto = encodeURIComponent(`Hola buenas soy ${nombre} quería consultarle sobre ${asunto} para el ${fecha}, ${mensaje}`);

    console.log(texto);

    const url = `https://wa.me/${numero}?text=${texto}`;

    // Abrir WhatsApp en nueva pestaña
    //window.open(url, "_blank");

    Swal.fire({
        title: '¿Quieres enviar este mensaje por WhatsApp?',
        text: "Se abrirá una nueva pestaña con tu mensaje.",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Sí, enviar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.open(url, "_blank");
        }
    });

});