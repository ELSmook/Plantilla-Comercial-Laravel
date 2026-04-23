<!DOCTYPE html>
@extends('adminlte::master')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{--composer require simplesoftwareio/simple-qrcode --}}
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        

        <link href="{{asset("/css/elixir.css")}}" rel="stylesheet">
        <link href="{{asset("/css/qr.css")}}" rel="stylesheet">
    </head>
    <body class="antialiased">
        
        {{--<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white box">--}}
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('panel') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @endauth
                </div>
            @endif
        {{--</div>--}}

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Fotos para la Pantalla</h2>
        </div>

        <div class="row">


          <div class="col-lg-12" >
            <form action="{{ route('fotos.qr') }}" method="POST" enctype="multipart/form-data" role="form" class="php-email-form">
              @csrf           
              @method('POST')
                <!-- ======= Tabs de fotos ======= -->
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <i class="fas fa-qrcode"></i>  Qr de la página
                    </button>
                    </li>

                    <li class="nav-item" role="presentation">

                        <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <i class="fas fa-image"></i> Subir fotos
                        </button>

                    </li>

                    <li class="nav-item" role="presentation">

                        <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <i class="fas fa-images"></i> Albúm de fotos
                        </button>

                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="container text-center">
                        <div>
                            {!! QrCode::size(300)->generate(url()->current()) !!}
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    
                    <div class="row">
                        <div class="col"> 
                            <div class="mb-3 row" style="display: flex; justify-content:center;">
                                <img src="{{'https://via.placeholder.com/320'}}" alt="Vista Previa" id="image_preview" class="img-fluid" style="object-fit: cover; object-position: center; height: 200px; width: 200px; border-radius: 200px;">
                            </div>
                        </div>
                    </div>

                    <div class="container text-center">

                        {{--<form action="{{ route('fotos.qr') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            @method('POST')--}}

                                <input class=" @error('imagen') is-invalid @enderror" type="file" id="imagen" class="Foto" multiple name="imagen[]" accept="image/*" capture="camera">
                                <label for="imagen">Subir Archivo</label>
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


                            <div class="container">
                                <button type="submit" class="btn btn-primary"> Subir</button>
                            </div>
                        {{--</form>--}}

                    </div>


                    
                    

                </div>
                <!-- ======= Tabs de fotos ======= -->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <!-- ======= Galería de fotos ======= -->
                    {{-- @isset($fotosQr->imagen){{ Storage::url($fotosQr->imagen) }}@endisset--}}
                    <div class="text-center">
                        {{--<img src="{{ Storage::url($fotosQr->first()->imagen) }}" alt="Foto inicial" width="300"data-toggle="modal" data-target="#modalGaleria">--}}

                       <div id="carouselModal" class="carousel slide" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                           @livewire('dynamic-photos')
                        </div>

                        <a class="carousel-control-prev" href="#carouselModal" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselModal" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                        
                    </div>
                    <!-- ======= Galería de fotos fin ======= -->
                </div>
                <!-- ======= Tabs de fotos fin ======= -->
            
              </div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Us Section -->


        
        {{--<script src="{{asset('js/vendor/venobox/venobox.min.js')}}"></script>--}}
            
        <script>
            

        document.addEventListener("DOMContentLoaded", function(event) {
            const image = document.getElementById('imagen');
        
            image.addEventListener('change', (e) => {

                const input = e.target;
                const imagePreview = document.querySelector('#image_preview');
                
                if(!input.files.length) return

                file = input.files[0];
                objectURL = URL.createObjectURL(file);
                imagePreview.src = objectURL;
            });
        });

        /*let intervalo = 4000;
        let totalSlides = document.querySelectorAll('#carouselModal .carousel-item').length;

        console.log("Tiempo de cada imagen: " ,intervalo * totalSlides)

        setInterval(() => {
            //Livewire.emit('refreshFotos');
            Livewire.dispatch('refreshFotos');
            console.log("Refrescar " , intervalo * totalSlides);
        }, intervalo * totalSlides);*/
        


        </script>
        
        

    </body>
</html>
