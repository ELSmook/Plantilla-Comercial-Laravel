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
            <a class="btn" href="{{ url('login')}}">Iniciar Sesión</a>
            @endauth
        </a>
      </div>
      <div class="social-links float-right">
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
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
        <h1 class="text-light"><a href="index.html"><span>Salon Arenales</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Inicio</a></li>
          <li><a href="#about">Sobre nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Portafolio</a></li>
          <li><a href="#pricing">Precios</a></li>
          <li><a href="#faq">Preguntas frecuentes</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>

    
    
  </header><!-- End Header -->


  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1  fotosCabecera','fotosQuince','fotosCasamiento','fotosFiestas' url('assets/img/slide/slide-1.jpg') --> 
          
          <div class="carousel-item active" style="background-image: url('@foreach ($fotosCabecera as $foto) @isset($foto->imagen) {{ Storage::url($foto->imagen) }} @endisset @break @endforeach');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Welcome to <span>Mamba</span></h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('@isset($fotosCabecera[1]){{ Storage::url($fotosCabecera[1]->imagen) }}@endisset');"> 
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('@isset($fotosCabecera[2]->imagen){{ Storage::url($fotosCabecera[2]->imagen) }} @endisset');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
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
          <div class="col-lg-6 video-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=EcbgbKtOELY" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>Sobre Nosotros</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="20">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="20">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Portafolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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
              <img src="@isset($fotosQuince[0]->imagen){{ Storage::url($fotosQuince[0]->imagen) }}@endisset" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p> 
                <div class="portfolio-links">
                  <a href="@isset($fotosQuince[0]->imagen){{ Storage::url($fotosQuince[0]->imagen) }}@endisset" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="@isset($fotosFiestas[0]->imagen) {{ Storage::url($fotosFiestas[0]->imagen) }} @endisset" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="@isset($fotosFiestas[0]->imagen) {{ Storage::url($fotosFiestas[0]->imagen) }} @endisset" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="@isset($fotosQuince[1]->imagen){{ Storage::url($fotosQuince[1]->imagen) }}@endisset" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="@isset($fotosQuince[1]->imagen){{ Storage::url($fotosQuince[1]->imagen) }}@endisset" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-eye"></i></a>
                  <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="@isset($fotosCasamiento[1]->imagen){{ Storage::url($fotosCasamiento[1]->imagen) }} @endisset" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
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
                <h4>Web 2</h4>
                <p>Web</p>
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
                <h4>App 3</h4>
                <p>App</p>
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
                <h4>Card 1</h4>
                <p>Card</p>
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
                <h4>Card 3</h4>
                <p>Card</p>
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
                <h4>Web 34</h4>
                <p>Web</p>
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
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section>
  <!-- End Services Section -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Preguntas Frecuentes</h2>
        </div>
        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" >
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>

          <div class="col-lg-6 faq-item" >
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

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

        </div>

      </div>
      <!-- Button trigger modal 
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
          Launch
        </button>-->
        
        
        
        
    <!-- DATES -->

    <!-- PRICING -->
    <section id="pricing" class="bg-dark">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-warning">PRECIOS</h6>
                    <h1 class="text-warning">Our Fair & Simple Pricing</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-4">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$299</h1>
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
                        <h1>$399</h1>
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
    </section>
    <!-- PRICING -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
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
            <h3>Mamba</h3>
            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li class="active"><a href="#hero">Inicio</a></li>
              <li><a href="#about">Sobre nosotros</a></li>
              <li><a href="#services">Servicios</a></li>
              <li><a href="#portfolio">Portafolio</a></li>
              <li><a href="#pricing">Precios</a></li>
              <li><a href="#faq">Preguntas frecuentes</a></li>
              <li><a href="#contact">Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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


