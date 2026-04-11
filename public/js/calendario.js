//const { right } = require("@popperjs/core");

document.addEventListener('DOMContentLoaded', function() {

  // Capturo los datos del calendario y luego los paso a render
  let DatosFormulario= document.querySelector("#FormularioEventos");


  const calendarEl = document.getElementById('calendar');
  const calendar = new FullCalendar.Calendar(calendarEl, {
    
  initialView: 'dayGridMonth',
  
  locale:'es',
  
  headerToolbar: {
    left: 'prev,next today',
    center: 'title',
    right: 'dayGridMonth,listWeek',
  },
  //,timeGridWeek,listWeek

  buttonText: {
  today: 'Hoy',
  month: 'Mes',
  week: 'Semana',
  day: 'Día',
  list: 'Lista'
  },

  //events: "http://127.0.0.1:8000/mostrar",
  displayEventTime:false,

  // Para que se vean todos los eventos en el calendario
  //events: BaseURL+"/mostrar",

  eventSources:{
    url: BaseURL+"/panel/eventos/mostrar", // Se debe cambiar cuando se usa el calendario en panel agregando /directorio/mostrar por ej sino solo /mostrar
    method:"POST",
    extraParams: {
      _token: DatosFormulario._token.value,
    } 
  },


  dateClick:function(info){
    console.log("Evento sin carga", BaseURL);
    
    DatosFormulario.reset();
    console.log(DatosFormulario.inicio.value);

    //var titulo = info.event._def.title;
    //console.log("este es el titulo: ",titulo);
    
    //DatosFormulario.inicio.value=info.dateStr;
    //DatosFormulario.fin.value=info.dateStr;

    // Inserto los datos de las fechas en los inputs
    //DatosFormulario.titulo.value=titulo;

    //DatosFormulario.titulo.value="Escriba el título del evento";

    DatosFormulario.inicio.value = info.dateStr + "T00:00";
    DatosFormulario.fin.value = info.dateStr + "T00:00";

    console.log("soy una fecha");

    // Para que se muestre el modal
    $("#evento").modal("show");


  }
  ,
  eventClick:function(info){
    
    var evento= info.event;
    console.log("Evento cargado");
    console.log(evento);
    //var titulo = info.event._def.title;
    //console.log("este es el titulo: ",titulo);
    //console.log(evento);
    var titulo = info.event._def.title;
    var descripcion= info.event._def.extendedProps.descripcion;

    // axios para editar datos
    axios.post(BaseURL+"/panel/eventos/editar/"+info.event.id).then((respuesta) => {
      //calendar.refetchEvents();

      
      //console.log("id: ",DatosFormulario.id.value= respuesta.data.id);
      console.log("aca: ", info.event);
      DatosFormulario.id.value= respuesta.data.id;
      DatosFormulario.titulo.value=titulo;
      DatosFormulario.descripcion.value= descripcion;
      DatosFormulario.inicio.value = evento.startStr.slice(0, 16);
      DatosFormulario.fin.value = evento.endStr ? evento.endStr.slice(0, 16) : evento.startStr.slice(0, 16);
      //DatosFormulario.inicio.value = evento.start + "T00:00";
      //DatosFormulario.fin.value = evento.end + "T00:00";

      $("#evento").modal("show");


    }
    ).catch(
      error=>{

        if(error.response){
          console.log(error.response.data);

        }

      }
    );



  }


  });

  calendar.render();

  // CRUD

  // Guardar:
  document.getElementById("guardar").addEventListener('click', function(){



    EnviarDatos("/panel/eventos/agregar"); // Si se usa el calendario en panel hay que agregar la ruta inicial


  });

  // Eliminar
  document.getElementById("eliminar").addEventListener('click', function(){
      
    //console.log("este id:", DatosFormulario.id.value);
    EnviarDatos("/panel/eventos/borrar/"+DatosFormulario.id.value); // Lo mismo aqui

  });

  // Actualizar
  document.getElementById("modificar").addEventListener('click', function(){
      
    //console.log("este id:", DatosFormulario.id.value);
    EnviarDatos("/panel/eventos/actualizar/"+DatosFormulario.id.value);

  });
  


    function EnviarDatos(url){

    const datos= new FormData(DatosFormulario);

    datos.append('_token', DatosFormulario._token.value); // Para seguridad dentro de panel

    const NuevaUrl= BaseURL+url;

    console.log(datos);

    console.log(DatosFormulario.descripcion.value);
    
      // axios para registrar datos
    axios.post(NuevaUrl, datos).then((respuesta) => {
      calendar.refetchEvents();
      $("#evento").modal("hide");
    }
    ).catch(
      error=>{

        if(error.response){
          console.log(error.response.data);

        }

      }
    )
    ;

    }



});

 /*const datos= new FormData(DatosFormulario);

    console.log(datos);

    console.log(DatosFormulario.descripcion.value);
    
      // axios para registrar datos
    axios.post("http://127.0.0.1:8000/agregar", datos).then((respuesta) => {
      calendar.refetchEvents();
      $("#evento").modal("hide");
    }
    ).catch(
      error=>{

        if(error.response){
          console.log(error.response.data);

        }

      }
    )
    ;*/






