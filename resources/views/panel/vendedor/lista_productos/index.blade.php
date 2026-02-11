{{-- Extiende de la plantilla de Admin LTE, nos permite tener el panel en la vista --}}
@extends('adminlte::page')

{{-- Activamos el Plugin de Datatables instalado en AdminLTE --}}
@section('plugins.Datatables', true)

{{-- Titulo en las tabulaciones del Navegador --}}
@section('title', 'Productos')

{{-- Titulo en el contenido de la Pagina --}}
@section('content_header')
    <h1>Lista de Productos</h1>
@stop

{{-- Contenido de la Pagina --}}
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            
            <a href="{{ route('producto.create') }}" class="btn btn-success text-uppercase">
                Nuevo Producto
            </a>
            <a href="{{ route('exportar-productos-pdf') }}" class="btn btn-danger" title="PDF"
                target="_blank">
                <i class="fas fa-file-pdf"></i>
            </a>
            <a href="{{ route('exportar-productos-excel') }}" class="btn btn-success" title="Excel">
                <i class="fas fa-file-excel"></i>
            </a>
            <a href="{{ route('graficos-productos')}}" class="btn btn-primary" title="ChartJs">
                <i class="fas fa-chart-pie"></i>
            </a>
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
                <table id="tabla-productos" class="table table-striped table-hover w-100"> {{--id="usuarios" --}}
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="text-uppercase">Categoría</th>
                            <th scope="col" class="text-uppercase">Nombre</th>
                            <th scope="col" class="text-uppercase">Descripción</th>
                            <th scope="col" class="text-uppercase">Imagen</th>
                            <th scope="col" class="text-uppercase">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td id="visto">{{ $producto->id }}</td>
                            <td id="visto">{{ $producto->categoria->nombre }}</td>
                            <td id="visto">{{ $producto->nombre }}</td>
                            <td id="visto">{{ Str::limit($producto->descripcion, 80) }}</td>
                            <td>
                                <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" class="img-fluid" style="width: 150px;">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('producto.show', $producto) }}" class="btn btn-sm btn-info text-white text-uppercase me-1">
                                        Ver
                                    </a>
                                    <a href="{{ route('producto.edit', $producto) }}" class="btn btn-sm btn-warning text-white text-uppercase me-1">
                                        Editar
                                    </a>
                                    @if($producto->Habilitado==1)
                                    <form action="{{ route('producto.destroy', $producto) }}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <button onclick="ocultar()" type="submit" class="btn btn-sm btn-danger text-uppercase">
                                            Eliminar
                                        </button>
                                    </form>
                                    @endif
                                    <form action="{{ route('producto.destroy', $producto) }}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <button onclick="mostrar()" type="submit" class="btn btn-sm btn-primary text-uppercase">
                                            Restaurar
                                        </button>
                                    </form>
                                </div>
                            </td>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css.css">
    {{-- Responsive css--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css.css">{{--k--}}
@stop


{{-- Importacion de Archivos JS --}}
@section('js')

    {{-- La funcion asset() es una funcion de Laravel PHP que nos dirige a la carpeta "public" --}}
    <script src="{{ asset('js/productos.js') }}"></script>
    {{--<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>--}}
    
    {{--Responsive js--}}
    {{--<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>--}}
    {{--new DataTable('#usuarios');--}}
    {{--
    <script>
    $('usuarios').DataTable({
        responsive: true
        autowidth: false
    });
    </script>
    {{-- Eliminar - restaurar--}}
    {{--<script src="{{ asset('js/boTones.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>--}}
@stop