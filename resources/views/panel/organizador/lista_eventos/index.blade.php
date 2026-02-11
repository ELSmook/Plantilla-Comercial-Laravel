{{-- Extiende de la plantilla de Admin LTE, nos permite tener el panel en la vista --}}
@extends('adminlte::page')

{{-- Activamos el Plugin de Datatables instalado en AdminLTE --}}
@section('plugins.Datatables', true)

{{-- Titulo en las tabulaciones del Navegador --}}
@section('title', 'Fotos del Salon')

{{-- Titulo en el contenido de la Pagina --}}
@section('content_header')
    <h1>Fotos</h1>


@stop

{{-- Contenido de la Pagina --}}
@section('content')
{{-- Código --}}


<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <button type="button" class="btn btn-sm btn-success text-white text-uppercase me-1" data-toggle="modal" data-target="#exampleModal" >
                Subir fotos
            </button>
        {{--@foreach ($fotos as $foto)--}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:black"> Subir Fotos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('fotos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        @method('POST')
                        
                        <label class="" for="exampleFormControlSelect1" style="color:black"> Seleccione las fotos:</label>   
                        <div class="col-sm-8">
                            {{-- Input de fotos--}}
                            
                            <input class="form-control @error('imagen') is-invalid @enderror" type="file" id="imagen" class="Foto" multiple name="imagen[]" accept="image/*">
                            @error('imagen')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                            @if ($errors->any())
                                <ul class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            {{-- Input de fotos--}}
                            <br> <br>
                            <label class="" for="exampleFormControlSelect1" style="color:black"> ¿En que sección del sitio iran? :</label>   
                            <select id="seccion" name="seccion" class="form-control" >
                                <option value="Cabecera"> Cabecera</option>
                                <option value="Quince"> Quince Años</option>
                                <option value="Casamiento"> Casamiento</option>
                                <option value="Otro tipo de evento"> Otro tipo de evento</option>
                                <option value="Ninguno"> Sin Sección</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary"> Subir</button>
                    </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                </div>
            </div>
            </div>
        {{--@endforeach--}}
    </div>
</div>
        
        @if (session('alert'))
            <div class="col-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('alert') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="tabla-fotos" class="table table-striped table-hover w-100"> {{--id="usuarios" --}}
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="text-uppercase">Categoría</th>
                            <th scope="col" class="text-uppercase">Imagen</th>
                            {{--<th scope="col" class="text-uppercase">Opciones</th>--}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fotos as $foto)
                        <tr>
                            <td>{{ $foto->id }}</td>
                            <td>
                                
                                @livewire('select-component', ['foto' => $foto])
                                
                            </td>
                            <td>
                            {{-- Eliminar--}}
                                <div class="btn-group dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{-- {{ $foto->imagen }}  --}}
                                        <img src="{{ Storage::url($foto->imagen) }}" alt="{{ $foto->seccion }}" class="img-fluid" style="width: 150px;">
                                    </button>
                                    <div class="dropdown-menu">
            
                                    <p>
                                    <form action="{{ route('fotos.destroy', $foto) }}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger text-uppercase">
                                            Eliminar esta foto -
                                        </button>
                                    </form>
                                    </p>

                                    </div>
                                </div>
                            {{-- Eliminar--}}
                            </td>
                            {{-- 
                            <td>
                                <div class="d-flex">
                                    
                                </div>
                            </td>
                            --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

{{-- Importacion de Archivos CSS --}}
@section('css')

    {{--@livewireStyles--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css.css">
    {{-- Responsive css--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css.css">{{--k--}}
@stop


{{-- Importacion de Archivos JS --}}
@section('js')
    {{--@livewireScripts @livewireStyles  @livewire('select-component', ['foto' => $foto])--}}
    {{-- La funcion asset() es una funcion de Laravel PHP que nos dirige a la carpeta "public" --}}
    {{--<script src="{{ asset('js/calendario.js') }}"></script>--}}
    <script src="{{ asset('js/fotos.js') }}"></script>

    

@stop