    //Botón eliminar
$(".eliminar").click(function(e){
  e.preventDefault();
  Swal.fire({
    title: '¿Estas seguro?',
    text: "¡No hay vuelta atrás!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '¡Si, borrarlo!'
  }).then((result) => {
    if (result.isConfirmed) {
      /*Swal.fire(
        '¡Borrado!',
        'Se ha borrado exitosamente.',
        'success'
      )*/
      this.submit();
    }
  })



});

console.log("alertaaaaas");
// Botón de ¿estas seguro?

// boton de esta seguro de volver atras



