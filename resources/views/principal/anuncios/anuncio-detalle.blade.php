<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Anuncios PBMC</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('img/favicon_perfect.png')}}" rel="icon">

  <!--{{ asset('js/app.js') }}
  <link href="img/favicon_perfect.png" rel="icon">
  -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{asset('css/nivo-slider-theme.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!--<div id="preloader"></div>-->

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped -forr better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <!--<h1><span>e</span>Business</h1>-->
                  <!-- Uncomment below iff you prefer to an image logo -->
                  <img src="{{asset('img/logo_perfect.png')}}" alt="perfect_body" title="">
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content forr toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Inicio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{url('/login')}}">Administrar Anuncios</a>
                  </li>
                  <!--
                  
                -->
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <!--<div class="home-overly"></div>-->
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Anuncios </h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Perfect Body Medical Center</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <!--
        -->
        <!-- End left sidebar --> 
        <!-- Start single blog -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <h2>{{$anuncio->titulo}}</h2>
                <div class="entry-meta">
                  <span class="author-meta"><i class="fa fa-user"> </i> admin </span>
                  <span><i class="fa fa-clock-o"></i>{{ $anuncio->created_at}}</span>
                  
                  <!--<span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>-->
                </div>
                <div><p style="font-size: 20px">{{$anuncio->descripcion}}</p></div>
                <div class="post-thumbnail">
                  <img src="{{asset('storage').'/'.$anuncio->imagen}}" alt="{{$anuncio->titulo}}" />
                </div>
                <div class="post-information">
                  <div class="entry-content">
                    <p style="font-size: 20px">{{$anuncio->contenido}}</p>
                    
                  </div>
                </div>
              </article>
              <!--
              
              -->
              <!-- single-blog end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>

  <!-- Start Suscrive Area -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Tecnologia Perfect Body</h3>
              <!--<a class="sus-btn" href="#">Get A quate</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Suscrive Area -->

  <!-- Start Footer bottom Area -->
  
    <footer>
      <div class="footer-area">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="footer-content">
                <div class="footer-head">
                  <div class="footer-logo">
                    <h2>Departamento de Tecnologia</h2>
                  </div>

                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                  <div class="footer-icons">
                    <ul>
                      <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="footer-content">
                <div class="footer-head">
                  <h4>información</h4>
                  <p>
                    Soporte para la herramienta SIOS, reporte de incidentes con equipos tecnologicos y apoyo en seguridad.
                  </p>
                  <div class="footer-contacts">
                    <p><span>Tel:</span> (5)4237101 ext 6020</p>
                    <p><span>Email:</span> tecnologia@perfectbody.com.co</p>
                    <p><span>Horario de atención:</span> 7:30am-12:00am / 2:00pm-6:00pm</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="footer-content">
                <div class="footer-head">
                  <h4>Instagram</h4>
                  <div class="flicker-img">
                    <a href="#"><img src="{{asset('img/portfolio/1.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/portfolio/2.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/portfolio/3.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/portfolio/4.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/portfolio/5.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/portfolio/6.jpg')}}" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-area-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="copyright text-center">
                <p>
                  &copy; Copyright <strong>Tecnologia Perfect Body</strong>. Todos los derechos Reservados.
                </p>
              </div>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if_ you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
                -->
                Rediseñado por <a href="https://www.linkedin.com/in/camosqueraba/">Carlos Mosquera</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('lib/knob/jquery.knob.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/parallax/parallax.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
  <script src="{{asset('lib/appear/jquery.appear.js')}}"></script>
  <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
