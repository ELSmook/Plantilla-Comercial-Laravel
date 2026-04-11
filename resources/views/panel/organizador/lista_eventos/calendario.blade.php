{{-- Extiende de la plantilla de Admin LTE, nos permite tener el panel en la vista --}}
@extends('adminlte::page')

{{-- Activamos el Plugin de Datatables instalado en AdminLTE --}}
@section('plugins.Datatables', true)

{{-- Titulo en las tabulaciones del Navegador --}}
@section('title', 'Fechas reservadas')

{{-- Titulo en el contenido de la Pagina --}}
@section('content_header')
    <h1>Calendario de Fechas</h1>
@stop

{{-- Contenido de la Pagina --}}
@section('content')
<div class="container-fluid">
    <div class="row">

        <!-- Button trigger modal 
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
  Launch
</button>-->


{{--
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">

    <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
    <i class="fa fa-home" aria-hidden="true"></i>  Inicio
    </button>

  </li>
  <li class="nav-item" role="presentation">

    <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
    <i class="fas fa-calendar-day"></i>  Fechas de Eventos
    </button>

  </li>
  <li class="nav-item" role="presentation">

    <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
      <i class="fa fa-info-circle" aria-hidden="true"></i> Información
    </button>

  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">3</div>
</div>--}}



<div class="container" id='calendar'></div>

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Evento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        
        <form id="FormularioEventos" enctype="multipart/form-data"> 
          @csrf
          <p>
          <label for="titulo" class="form-label">id</label>
          <input type="text" class="@error('id') is-invalid @enderror" id="id" name="id">
          @error('titulo')
              <div class="invalid-feedback"> {{ $message }} </div>
          @enderror
          </p>
          <label for="titulo" class="form-label"> * Título del Evento</label>
          <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" name="titulo" placeholder="Escriba el nombre del evento.">
          @error('titulo')
              <div class="invalid-feedback"> {{ $message }} </div>
          @enderror


          <label for="inicio" class="form-label"> * Descripción del Evento</label>
          <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" rows="5"></textarea>
          @error('descripcion')
              <div class="invalid-feedback"> {{ $message }} </div>
          @enderror

          <label for="inicio" class="form-label"> * Inicio</label>
          <div class="col">
              <input type="datetime-local" class="form-control @error('inicio') is-invalid @enderror" id="inicio" name="inicio">
              @error('inicio')
                  <div class="invalid-feedback"> {{ $message }} </div>
              @enderror
          </div>
        
                                            
          <label for="fin" class="form-label"> * Fin</label>
          <div class="col">
              <input type="datetime-local" class="form-control @error('fin') is-invalid @enderror" id="fin" name="fin" >
              @error('fin')
                  <div class="invalid-feedback"> {{ $message }} </div>
              @enderror
          </div>

        </form>

      </div>
      <div class="modal-footer">

        <button type="button" id="guardar" class="btn btn-success">Guardar</button>

        <button type="button" id="modificar" class="btn btn-warning">Modificar</button>

        <button type="button" id="eliminar" class="btn btn-danger">Eliminar</button>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>


      </div>
    </div>
  </div>
</div>

    </div>
</div>

@stop

@section('css')

    {{--@livewireStyles--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css.css">
    {{-- Responsive css--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css.css">{{--k--}}
@stop

@section('js')
   
  <script src="{{ asset('js/calendario.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  {{--@vite(['resources/js/app.js', 'resources/css/app.css'])--}}

  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js"></script>
  
  <script type="text/javascript">
        //var BaseURL= { !!json_encode(url('/')) }
        var BaseURL= {!! json_encode(url('/')) !!}
      //console.log(BaseURL);
  </script>


{{--<script>
    const urlMostrar = "{{ route('show') }}";
    const urlAgregar = "{{ route('store') }}";
    const urlEditar = "{{ route('edit', ['id' => '']) }}"; 
    const urlActualizar = "{{ route('update', ['evento' => '']) }}";
    const urlBorrar = "{{ route('destroy', ['id' => '']) }}";
</script>--}}
    

@stop