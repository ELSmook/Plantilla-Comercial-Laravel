{{--@extends('adminlte::page')

@section('content')--}}



<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Salón Arenales 42</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('js/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('js/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('js/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('js/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="{{asset('js/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('js/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="{{asset("/css/W.css")}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        {{--<i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55--}}
        <i class="bx bx-user"></i>
          @auth
            {{--opciones de usuario logueado--}}
              <a class="btn" href="{{ url('panel')}}">Panel</a>
            @else
            {{-- usuario no logueado--}}
            <a class="btn" href="{{ url('login')}}"></a>
            @endauth
        </a>
      </div>
      <div class="social-links float-right">
        <a href="https://www.facebook.com/people/Salon-arenales/100063671315114/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/salon_arenales_salta/" class="instagram"><i class="icofont-instagram"></i></a>
        {{--<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>--}}
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" >
    
    <div class="container-lg">
      
      <div class="logo float-left">
        <h1 class="text-light">
          @auth
            {{--opciones de usuario logueado--}}
              <a class="btn" href="{{ url('panel')}}"><span>Salon Arenales</span></a>
          @else
            {{-- usuario no logueado--}}
            <a class="btn" href="{{ url('login')}}"><span>Salon Arenales</span></a>
          @endauth
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Inicio</a></li>
          <li><a href="#about">Sobre nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Portafolio</a></li>
          {{--<li><a href="#pricing">Precios</a></li>--}}
          <li><a href="#faq">Preguntas frecuentes</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->

    </div>

    
    
  </header><!-- End Header -->


  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1  fotosCabecera','fotosQuince','fotosCasamiento','fotosFiestas' url('assets/img/slide/slide-1.jpg') --> 
          
          <div class="carousel-item active" style="background-image: url('@foreach ($fotosCabecera as $foto) @isset($foto->imagen) {{ Storage::url($foto->imagen) }} @endisset @break @endforeach'); height: 85vh; background-position: center; background-size: cover;">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown"> Bienvenidos al <span>SALON ARENALES</span></h2>
                <p class="animated fadeInUp"> Ubicado en Arenales 42, en la ciudad de Salta, contamos con un espacio ideal para la realización de eventos sociales íntimos y medianos, diseñado para recibir hasta 100 invitados.</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Saber más</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('@isset($fotosCabecera[1]){{ Storage::url($fotosCabecera[1]->imagen) }}@endisset');"> 
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown"> Momentos únicos</h2>
                <p class="animated fadeInUp"> Que perduran en la memoria con Amor y cariño</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Saber más</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('@isset($fotosCabecera[2]->imagen){{ Storage::url($fotosCabecera[2]->imagen) }} @endisset');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">El lugar ideal para tu evento</h2>
                <p class="animated fadeInUp"> Ofrecemos el ambiente ideal para bodas, fiestas de quince y celebraciones familiares.</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Saber más</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          {{-- Video 1--}}
          <div class="col-lg-6 video-box">
            <img src="@foreach ($fotosCabecera as $foto) @isset($foto->imagen) {{ Storage::url($foto->imagen) }} @endisset @break @endforeach" class="img-fluid" alt="Salon de Fiestas con decoración de mesas y sillas con fundas elegantes">
            <a href="https://youtube.com/kQ5ClDKSxBk" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" data-gall="videos"></a>
          </div>
          
          {{-- Video 2
          <div class="col-lg-6 video-box" hidden>
            <img src="@foreach ($fotosCabecera as $foto) @isset($foto->imagen) {{ Storage::url($foto->imagen) }} @endisset @break @endforeach" class="img-fluid" alt="Pista de baile armada para el vals de bodas en Salón de fiestas Arenales">
            <a href="https://youtube.com/bNuc8Anui8E?feature=share" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" data-gall="videos"></a>
          </div>--}}
          {{-- Video 3
          <div class="col-lg-6 video-box" hidden>
            <img src="@foreach ($fotosCabecera as $foto) @isset($foto->imagen) {{ Storage::url($foto->imagen) }} @endisset @break @endforeach" class="img-fluid" alt="Pista de baile armada para el vals de bodas en Salón de fiestas Arenales">
            <a href="https://www.youtube.com/dU73Y9oaCqo" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" data-gall="videos"></a>
          </div>--}}
          

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              
              <h2 class="var">
                Sobre Nosotros
              </h2>
              <p>
                Con más de 20 años de experiencia en el rubro sabemos que organizar un evento es mucho más que elegir un lugar: es dar forma a recuerdos que durarán toda la vida. 
                Por eso, nos comprometemos a acompañarte en cada paso, con atención cercana y asesoramiento personalizado brindando confianza y tranquilidad para que todo se lleve a cabo correctamente

              </p>
            </div>

            

            <div class="icon-box" data-aos="fade-up" data-aos-delay="20">
              <div class="icon"><i class='bx bx-book-open'></i></div>
              <h4 class="title"><a href=""> Consultas</a></h4>
              <p class="description">
                Las consultas se hacen con cita previa.
              </p>
            </div>

            

            <div class="icon-box" data-aos="fade-up" data-aos-delay="20">
              <div class="icon"><i class="bx bx-time"></i></div>
              <h4 class="title"><a href="">Horarios de atención y de Evento</a></h4>
              <p class="description">
                 Estamos abiertos de Lunes a Viernes de 10:00AM Hrs hasta 19:30PM hrs.
                Los eventos son de 21:30PM Hrs hasta 04:00AM Hrs.
              </p>
            </div>


          </div>
          
        </div>

      </div>
    </section><!-- End About Us Section -->

    

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          
          <h2 class="var1">Portafolio</h2>
          
          <p>A lo largo de los años, Salón Arenales ha sido escenario de innumerables historias: bodas llenas de emoción, fiestas de quince inolvidables y reuniones familiares que fortalecen lazos. Nuestro portafolio refleja la versatilidad del salón y la creatividad de cada anfitrión, con decoraciones personalizadas, iluminación adaptada a distintos estilos y celebraciones que destacan por su calidez. Descubre cómo otros anfitriones confiaron en nosotros y deja que sus experiencias te inspiren a crear la tuya.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-app">Quince Años</li>
              <li data-filter=".filter-card">Casamientos</li>
              <li data-filter=".filter-web">Otros eventos</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="@isset($fotosQuince[0]->imagen){{ Storage::url($fotosQuince[0]->imagen) }}@endisset" class="img-fluid" alt="Mesa Candy Bar para fiesta de quince">
              <div class="portfolio-info">
                <h4>Quince Años</h4>
                <p>XV</p> 
                <div class="portfolio-links">
                  <a href="@isset($fotosQuince[0]->imagen){{ Storage::url($fotosQuince[0]->imagen) }}@endisset" data-gall="portfolioGallery" class="venobox" title="App 1"  data-vbwidth="100px" data-vbheight="100px"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="@isset($fotosFiestas[0]->imagen) {{ Storage::url($fotosFiestas[0]->imagen) }} @endisset" class="img-fluid" alt="Decoración de mesas con centro y Salón con amplia capacidad de personas con rampa de discapacitados">
              <div class="portfolio-info">
                <h4>Fiestas</h4>
                <p>Distintas fiestas</p>
                <div class="portfolio-links">
                  <a href="@isset($fotosFiestas[0]->imagen) {{ Storage::url($fotosFiestas[0]->imagen) }} @endisset" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="@isset($fotosQuince[1]->imagen){{ Storage::url($fotosQuince[1]->imagen) }}@endisset" class="img-fluid" alt="Quinceañera en escenario con paneles Shimmer y luces LED">
              <div class="portfolio-info">
                <h4>Quince Años</h4>
                <p>XV</p>
                <div class="portfolio-links">
                  <a href="@isset($fotosQuince[1]->imagen){{ Storage::url($fotosQuince[1]->imagen) }}@endisset" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="@isset($fotosCasamiento[1]->imagen){{ Storage::url($fotosCasamiento[1]->imagen) }} @endisset" class="img-fluid" alt="Espacio para recepcción de invitados y mesas de catering">
              <div class="portfolio-info">
                <h4>Casamiento</h4>
                <p>Boda</p>
                <div class="portfolio-links">
                  <a href="@isset($fotosCasamiento[1]->imagen){{ Storage::url($fotosCasamiento[1]->imagen) }} @endisset" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="@isset($fotosFiestas[2]->imagen){{ Storage::url($fotosFiestas[2]->imagen) }}@endisset" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Evento</h4>
                <p>Fiesta</p>
                <div class="portfolio-links">
                  <a href="@isset($fotosFiestas[2]->imagen){{ Storage::url($fotosFiestas[2]->imagen) }}@endisset" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="@isset($fotosQuince[2]->imagen){{ Storage::url($fotosQuince[2]->imagen) }}@endisset" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Quince Años</h4>
                <p>XV</p>
                <div class="portfolio-links">
                  <a href="@isset($fotosQuince[2]->imagen){{ Storage::url($fotosQuince[2]->imagen) }}@endisset" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="@isset($fotosCasamiento[0]->imagen) {{ Storage::url($fotosCasamiento[0]->imagen) }} @endisset" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Casamiento</h4>
                <p>Boda</p>
                <div class="portfolio-links">
                  <a href="@isset($fotosCasamiento[0]->imagen) {{ Storage::url($fotosCasamiento[0]->imagen) }} @endisset" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="@isset($fotosCasamiento[2]->imagen){{ Storage::url($fotosCasamiento[2]->imagen) }}@endisset" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Casamiento</h4>
                <p>Boda</p>
                <div class="portfolio-links">
                  <a href="@isset($fotosCasamiento[2]->imagen){{ Storage::url($fotosCasamiento[2]->imagen) }}@endisset" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="@isset($fotosFiestas[1]->imagen) {{ Storage::url($fotosFiestas[1]->imagen) }}@endisset" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Evento</h4>
                <p>Fiestas</p>
                <div class="portfolio-links">
                  <a href="@isset($fotosFiestas[1]->imagen) {{ Storage::url($fotosFiestas[1]->imagen) }}@endisset" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

     <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2 class="var1">Servicios</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bx bx-headphone"></i></div>
            <h4 class="title"><a href=""> DJ</a></h4>
            <p class="description"> Se realiza una programación previa con el dj para seleccionar el tipo de musica que desea para el evento</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-microphone"></i></div>
            <h4 class="title"><a href="">Locutor</a></h4>
            <p class="description"> Fundamental para coordinar el evento desde el inicio hasta el final .</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-business-man"></i></div>
            <h4 class="title"><a href="">Portero</a></h4>
            <p class="description"> Se encarga del control de invitados a través de una Lista.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Decoración</a></h4>
            <p class="description"> Incluye decorado de luces y telas, con sectores en la entrada y en el escenario, como asi también la mesa principal teniendo en cuenta colores elejidos.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-building"></i></div>
            <h4 class="title"><a href="">Patio para fumadores</a></h4>
            <p class="description"> Esta al final del Salón</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-dining-table"></i></div>
            <h4 class="title"><a href="">Mesas y Sillas</a></h4>
            <p class="description"> Cuenta con 22 mesas redondas con una capacidad para  8 comensales y sillas.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-plus-medical"></i></div>
            <h4 class="title"><a href="">Servicio de MEDISEM</a></h4>
            <p class="description"> Para brindar mayor tranquilidad y protección este servicio funciona durante el evento y cubre las emergencias medicas que pudieran surgir.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-trash"></i></div>
            <h4 class="title"><a href="">Limpieza General</a></h4> 
            <p class="description"> Este servicio esta cubierto para garantizar la higiene durante y al finaizar el evento.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-cocktail"></i></div>
            <h4 class="title"><a href="">Barra de tragos</a></h4>
            <p class="description"> Este sector esta destinado para el funcionamiento de expendio de bebida.</p>
          </div>

        </div>

      </div>
    </section>
  <!-- End Services Section -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 class="var1">Preguntas Frecuentes</h2>
        </div>
        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" >
            <h4>¿Los precios son fijos?</h4>
            <p>
            Si, del alquiler del Salón son precios que no tienen reajuste.
            </p>
          </div>

          <div class="col-lg-6 faq-item" >
            <h4>¿Realizan servicio de Catering?</h4>
            <p>
              {{--El Salón Arenales se adhiere al decreto N.º 750 donde se estipula que los salones que realizan eventos privados no deben cobrar impuestos (SADAIC y ADICAPIF).--}}
               Si y el servicio cuenta principalmente con manteleria, vajilla, mozos, cocineros, Barman, entre otras cosas.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>¿Brindan asesoría si alquilamos el Salón solo?</h4>
            <p>
              Si, le brindamos asesoría con lo que necesite hacer o saber sobre su evento para que encuentre lo que necesite.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>¿Puedo suprimir algunos servicios del alquiler?</h4>
            <p>
              El alquiler del Salón Arenales le incluye varios servicios que ya se encuentran instalados.
            </p>
          </div>
          {{--
          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</h4>
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
            </p>
          </div>
          --}}
        </div>

      </div>
      <!-- Button trigger modal 
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
          Launch
        </button>-->
        
        
        
        
    <!-- DATES -->

    <!-- PRICING -->
    {{--<section id="pricing" class="bg-dark">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-warning">PRECIOS</h6>
                    <h1 class="text-warning">Our Fair & Simple Pricing</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-4 ">
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$99</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Premium support</li>
                            <li><i class='bx bxs-check-circle'></i>
                                30+ Webmaster Tools</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Drag & Drop Builder</li>
                            <li><i class='bx bxs-check-circle'></i>
                                eCommerce Store</li>
                            <li><i class='bx bxs-check-circle'></i>Wordpress plugins</li>
                        </ul>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$199</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Premium support</li>
                            <li><i class='bx bxs-check-circle'></i>
                                30+ Webmaster Tools</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Drag & Drop Builder</li>
                            <li><i class='bx bxs-check-circle'></i>
                                eCommerce Store</li>
                            <li><i class='bx bxs-check-circle'></i>Wordpress plugins</li>
                        </ul>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </section>--}}
    <!-- PRICING -->

    <!-- ======= Contact Us Section ======= -->
    <section  class="contact">
      <div class="container">

        <div id="contact" class="section-title">
          <h2 class="var1">Contacto</h2> 
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Dirección</h3>
              <p>ARENALES 42</p>
              <div class="container">
                <!--<input type="text" id="input" placeholder="Ingrese una ubicacion">-->
                  <!--<div id="map"></div>-->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.69733060339!2d-65.40435362566028!3d-24.771564607163956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc3ea2a0d5fd1%3A0xb00835aa919cda3b!2sArenales%2042%2C%20A4400%20Salta!5e0!3m2!1ses!2sar!4v1774837109129!5m2!1ses!2sar" width="85%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>

          
          {{--Formulario de Whatsapp --}}
          <div class="col-lg-18" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                  <i class="bx bxl-whatsapp"></i>
                    <h3>Contactanos por WhatsApp y dejanos un mensaje</h3>
                    <p>también<br> puede llamarnos o visitar el salón en horarios habiles</p>
          </div>

            <div class="col-lg-15" data-aos="fade-up" data-aos-delay="300">
            <form method="post" role="form" class="eliminar">
              <div class="form-row">
                <div class="col-lg-6 form-group">

                  <input type="text" name="name" class="form-control" id="nombre" placeholder="Escriba su Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                  
                </div>
                    <div class="col-lg-6 form-group">
                      
                     
                    </div>
              </div>
              <div class="form-group">

                <select id="asunto" name="seccion" class="form-control" >
                    <option value="" selected disabled>-- Seleccione un asunto --</option>
                    <option value="Fecha">Fecha</option> 
                    <option value="Presupuesto">Presupuesto</option>
                    <option value="Otro"> Otro tipo de consulta</option>
                </select>
                
                
              </div>

              <div class="form-group">

                <input type="date" class="form-control" id="fecha" name="inicio">
                
                
              </div>

              <div class="form-group">
                <textarea class="form-control" id="mensaje" rows="5" data-rule="required" data-msg="S" placeholder="Escriba aquí su mensaje y detalle el evento para el cuál utilizaria el Salon"></textarea>
                
              </div>
              <div class="mb-3">
                
                
                <button class="text-center danger btn btn-success" id="btnWhatsapp" type="button">
                    Enviar a WhatsApp
                </button>

              </div>


              


            </form>
          </div>

          </div>
          {{--Formulario de Whatsapp FIN --}}

          

        </div>
        

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>SALON ARENALES</h3>
            <p>
              Arenales 42 <br>
              Salta Capital, ARG<br><br>
              {{--<strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>--}}
            </p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/people/Salon-arenales/100063671315114/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/salon_arenales_salta/" class="instagram"><i class="bx bxl-instagram"></i></a>
              {{--<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>--}}
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li class="active"><a href="#hero">Inicio</a></li>
              <li><a href="#about">Sobre nosotros</a></li>
              <li><a href="#services">Servicios</a></li>
              <li><a href="#portfolio">Portafolio</a></li>
              {{--<li><a href="#pricing">Precios</a></li>--}}
              <li><a href="#faq">Preguntas frecuentes</a></li>
              <li><a href="#contact">Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>El mejor lugar para tu evento</h4>
            {{--<ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>--}}
          </div>

          {{--<div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>--}}

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Salon Arenales</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by {{--<a href="https://bootstrapmade.com/">--}}Kevin Hoyos</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('js/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('js/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('js/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('js/vendor/aos/aos.js')}}"></script>
  
  <script src="{{ asset('js/mamba.js') }}"></script>
  <script src="{{ asset('js/formulario.js') }}"></script>
  {{-- SweetAlert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    
  
</body>

  
{{--@stop

@section('js')
@stop--}}

  {{--@vite(['resources/js/app.js', 'resources/css/app.css'])--}}


