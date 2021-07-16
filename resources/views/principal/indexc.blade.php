<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Portal Inicio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon_perfect.png" rel="icon">
    <!--
    <link href="img/favicon_perfect.png" rel="apple-touch-icon">
    -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mini-anuncio.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="css/responsive.css" rel="stylesheet">
    

    <!-- =======================================================
      Theme Name: eBusiness
      Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
  </head>

  <body data-spy="scroll" data-target="#navbar-example">
    <header>
      <!-- header-area start -->
      <div id="sticker" class="header-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">

              <!-- Navigation -->
              <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!-- Brand -->
                  <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                    
                    <!-- Uncomment below if_ you prefer to use_ an image logo -->
                    <img src="img/logo_perfect.png" alt="logo perfectbody" title="">
                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                      <a class="page-scroll" href="#home">Inicio</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#blog">Anuncios</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#team">Cumpleaños</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#pricing">Documentos</a>
                    </li>
                    <li id="boton_menu" class="dropdown" onclick="clickMenu()">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menú<span class="caret"></span></a>
                      <!--<ul class="dropdown-menu" role="menu">-->

                        <div id="contenedor_opciones_menu" class="contenedor_opciones_menu dropdown-content">
                          <h3 class="titulo_enlace_menu">
                             <strong>
                              
                            </strong>
                          </h3>
                          <a id="enlace_menu" class="enlace_menu" href="http://192.168.1.95/ActivosFijos/index.aspx" target="_blank">
                            <i class="fa fa-bar-chart fa-fw"></i> Activos Fijos
                          </a>
                          <a id="enlace_menu" class="enlace_menu"  href="http://192.168.1.95/ADMISIONES/index.aspx" target="_blank">
                            <i class="fa fa-file-text fa-fw"></i> Admisiones
                          </a>
                          
                          <a id="enlace_menu" class="enlace_menu"href="http://192.168.1.95/CITAS/index.aspx">
                            <i class="fa fa-plus-square fa-fw" aria-hidden="true"></i> Citas</a>
                          <a id="enlace_menu" class="enlace_menu" href="http://192.168.1.95/contratacion/Index.aspx" target="_blank">
                            <i class="fa fa-handshake-o fa-fw" aria-hidden="true"></i> Contratación</a>
                          <a id="enlace_menu" class="enlace_menu" href="http://192.168.1.52:8686/SST_Perfect-Body/public/" target="_blank">
                            <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>  C.P.C.PBMC</a>
                          <a id="enlace_menu" class="enlace_menu" href="http://192.168.1.95/gerencial/index.aspx" target="_blank">
                            <i class="fa fa-sitemap fa-fw" aria-hidden="true"></i>  Gerencial</a>
                          <a id="enlace_menu" class="enlace_menu" href="http://192.168.1.52:8686/Gestion_Documental/public/login" target="_blank">
                            <i class="fa fa-archive fa-fw" aria-hidden="true"></i>  Gestion Documental</a>
                          <a id="enlace_menu" class="enlace_menu" href="http://192.168.1.52:8686/Incidencias/public/login" target="_blank">
                            <i class="fa fa-edit fa-fw" aria-hidden="true"></i>  Incidencias</a>
                          <a id="enlace_menu" class="enlace_menu" href="http://192.168.1.52:8686/Inspeccion_perfect_Body/public/login" target="_blank">
                            <i class="fa fa-clipboard fa-fw" aria-hidden="true"></i>  Inspección</a>
                          <a id="enlace_menu" class="enlace_menu" href="http://192.168.1.95/ORDENES/index.aspx" target="_blank">
                            <i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>  Orden Externa</a>
                          <a id="enlace_menu" class="enlace_menu" href="http://192.168.1.100:8080/oviyam2/" target="_blank">
                            <i class="fa fa-hospital-o fa-fw" aria-hidden="true"></i>  RX-Oviyam</a>
                          
                          <a id="enlace_menu" class="enlace_menu" href="http://192.168.1.95/SIOS/" target="_blank">
                            <i class="fa fa-user-md fa-fw" aria-hidden="true"></i>  SIOS</a>
                          <h3 class="titulo_enlace_menu">
                            <strong>
                              <hr>
                             </strong>
                          </h3>
                          <a id="enlace_menu" class="enlace_menu" href="https://www.colmenaseguros.com/Paginas/EncuestaCovid.aspx" target="_blank">
                            <i class="fa fa-bar-chart-o fa-fw" aria-hidden="true"></i>  Encuesta Colmena</a>   
                          <a id="enlace_menu" class="enlace_menu" href="https://drive.google.com/drive/folders/15VjXdXO1VjGVTE-TJrNMcfFSWxHn741r?usp=sharing" target="_blank">
                            <i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>  Fichas INS
                          </a>
                          <a id="enlace_menu" class="enlace_menu" href="https://mipres.sispro.gov.co/MIPRESNOPBS/Login.aspx" target="_blank">
                            <i class="fa fa-user-md fa-fw" aria-hidden="true"></i>  Mipres SISPRO</a>
                          <a id="enlace_menu" class="enlace_menu" href="https://resultados.patologosasociados.com/" target="_blank">
                            <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>  Patologos Asociados</a>
                          <a id="enlace_menu" class="enlace_menu" href="https://imagenes.rras-sas.com/viewer/index.php" target="_blank">
                            <i class="fa fa-thumb-tack fa-fw" aria-hidden="true"></i>  Radiologos S.A.S
                          </a>
                          <a id="enlace_menu" class="enlace_menu" href="{{url('/login')}}" target="_blank">
                            <i class="fa fa-lock fa-fw" aria-hidden="true"></i>  Administrar Sitio
                          </a>
                            </div>
                      <!--</ul>-->
                    </li>
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

    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
      <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
          <img src="img/slider/fondo_perfect.jpg" alt="" title="#slider-direction-0" />
          {{$variable = 1}}
          
          @if(count($cumpleanieros_hoy)>0)
          <img src="img/slider/tarjeta-cumpleanos.jpg" alt="" title="{{'#slider-direction-'.$variable}}" />
          {{$variable = $variable +1}}
          @endif
          @foreach ($imagenes_slides as $imagen_slide)
            @if(is_null($imagen_slide->imagen))
              <img src="img/slider/slider_nuevo_documento.jpg" alt="slider_nuevo_documento" title="{{'#slider-direction-'.$variable}}" />
            @else
              <img src="{{asset('storage').'/'.$imagen_slide->imagen}}" alt="" title="{{'#slider-direction-'.$variable}}" />
            @endif  
          {{$variable = $variable +1}}
          @endforeach
          
        </div>

        <!-- direction 0 -->
        {{$variable = 0}}
        <div id="{{'slider-direction-'.$variable}}" class="slider-direction slider-one">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content">
                  <!-- layer 1 -->
                  <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2 class="title1">Bienvenido a Portal de Inicio</h2>
                  </div>
                  <!-- layer 2 -->
                  <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1 class="title2"></h1>
                  </div>
                  <!-- layer 3 -->
                  <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="ready-btn right-btn page-scroll" href="#blog">Todos los anuncios</a>
                    <!--<a class="ready-btn page-scroll" href="blog">MAS INFO</a>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        {{$variable = $variable +1}}
        @if(count($cumpleanieros_hoy)>0)
          <div id="{{'slider-direction-'.$variable}}" class="slider-direction slider-one">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="slider-content">
                    <!-- layer 1 -->
                    <div class="layer-1-1 hidden-xs wow slideInDown" style="padding-top=100px;" data-wow-duration="2s" data-wow-delay=".2s">
                      <!--<h2 class="title1 nombre-cumpleaniero">{{$dia_mes}}</h2>-->
                      @foreach ($cumpleanieros_hoy as $cumpleaniero )
                      <h2 class="title1 nombre-cumpleaniero">{{$cumpleaniero}}</h2>    
                      @endforeach
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                      <h1 class="title2" style="margin-bottom: 0">FELIZ CUMPLEAÑOS</h1>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                      <a class="ready-btn right-btn page-scroll" style="margin-bottom: 20px" href="#team">Ver Cumpleaños {{$mes}}</a>
                      <!--<a class="ready-btn page-scroll" href="blog">MAS INFO</a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{$variable = $variable +1}}
          @endif
        @foreach ($datos_slides as $dato_slide)
        
        <div id="{{'slider-direction-'.$variable}}" class="slider-direction slider-one">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content">
                  <!-- layer 1 -->
                  <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">{{$dato_slide->titulo}}</h2>

                  </div>
                  <!-- layer 2 -->
                  <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">{{$dato_slide->descripcion}}</h1>
                  <!--<p class="title2">{{$dato_slide->descripcion}}</p>-->

                  </div>
                  <!-- layer 3 -->
                  <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#blog" >Todos los anuncios</a>
                  <a class="ready-btn page-scroll" href="{{url('anuncios/'. $dato_slide->id)}} " target="_blank">MAS INFO</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{$variable = $variable + 1}}
        @endforeach
        
      </div>
    </div>
    <!-- Start Blog Area -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Anuncios Perfect Body</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
          
            @foreach ($anuncios as $anuncio)
            <!-- Start single blog -->
            <div class="card tarjeta-anuncio"> 
              <div class="card-header">
                @if(is_null($anuncio->imagen))
                <img src="img/slider/slider_nuevo_documento.jpg" alt="slider_nuevo_documento" title="{{'#slider-direction-'.$variable}}" />
              @else
                <img src="{{asset('storage').'/'.$anuncio->imagen}}" alt="rover" />
              @endif
              </div>
              
              <div class="card-body">
                
                <span class="date-type" style="display:inline;">
                  <i class="fa fa-calendar"></i>{{$anuncio->fecha_inicio}} / {{$anuncio->fecha_fin}}
                </span>
                <span class="tag tag-usuario" style="display:inline;">{{$anuncio->usuario_nombre}}</span>
                <div class="card-titulo">
                  <h4 >
                    {{$anuncio->titulo}}
                  </h4>
                </div>
                <div class="card-contenedor-descripcion">
                  <p >
                    {{$anuncio->descripcion}}
                  </p>
                </div>
                
                <div class="user">
                  <a href="{{url('anuncios/'. $anuncio->id)}}" target="_blank" class="tag tag-blue">Mas info</a>
                  <a id ="{{$anuncio->id}}-enlace-mini-anuncio" href="{{$anuncio->link}}" target="_blank" class="tag tag-blue enlace-card">Ver enlace</a> 
                </div>
              </div>
            </div>
            @endforeach
          </div>
           
          
          
          
          <!--</div>-->
          
        </div>
      </div>
    </div>
    <!-- End Blog -->

    <!-- Start Wellcome Area -->
    <div class="wellcome-area">
      <div class="well-bg">
        <div class="test-overly"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="wellcome-text">
                <div class="well-text text-center">
                  <h2>Portal de inicio Perfect Body</h2>
                  <p>
                    Encuentre en el menú superior enlaces de interes
                  </p>
                  <!---->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Wellcome Area -->

    <!-- Start team Area -->
    
    <!-- End Team Area -->

    <!-- cumpleaños mes -->
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2 style="text-transform: capitalize;">Cumpleaños {{$mes}}</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="list-group">
              @foreach ( $todos_cumpleanios as $cumpleanio )
              <!--<div class="list-group-item list-group-item-action ">-->
              <div>
                <!--<span class="badge badge-pill badge-primary pull-right">{{$cumpleanio->Dia}}</span>-->
                <h4 style="display: inline-block; color:#003660; margin-right:15px;">{{$cumpleanio->Dia}}</h3>
                <h6 style="display: inline-block;">{{$cumpleanio->Empleado}}</h6>
              </div>
              @endforeach
            </div>
          </div>
            
          <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="team-top">
              @foreach ($cumpleanos_con_fotos as $cumpleano_con_foto )
              <div class="col-md-3 col-sm-3 col-xs-12 single-team-member-contenedor">
               <div class="single-team-member">
                  <div class="team-img">
                    
                      <img class="foto-cumpleaños" src="{{asset('storage').'/'.$cumpleano_con_foto->foto}}" alt="">
                    
                    <!--
                    <div class="team-social-icon text-center">
                      <ul>
                        <li>
                          <a href="#">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                              <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                              <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                      </ul>
                    </div>
                  -->
                  </div>
                  <div class="team-content text-center">
                    <h6 style="text-transform: capitalize;"><strong>{{$cumpleano_con_foto->nombre}}</strong></h6>
                    <p>{{$cumpleano_con_foto->fecha}}</p>
                    <p>{{$cumpleano_con_foto->area}}</p>
                  </div>
                </div>
               </div>
              @endforeach
              
             
            </div>
          </div>
           
          </div> <!--para poder centrar-->
          
        </div>
      </div>
    </div>
  </div>
  <!-- fin cumpleaños mes-->


    <!-- start pricing area -->
    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Documentos</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <!--<div class="col-md-3 col-sm-3 col-xs-12"></div> para poder centrar-->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="pri_table_list active">
              <h3>Encuentre aquí los documentos</h3>
              <div class=".table-responsive">
                <table class="table">
                  
                  <thead>
                    <tr>
                      <th scope="col">Publicación</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Descripción</th>
                      <th scope="col">Ver/Descargar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($documentos as $documento )
                    <tr>
                      <td class="celda-cumpleanios">{{date_format($documento->updated_at, 'Y-m-d')}}</td>
                      <!--<th scope="row">{{$documento->id}}</th>-->
                      <td class="celda-cumpleanios"><strong>{{$documento->titulo}}</strong></td>
                      <td class="celda-cumpleanios">{{$documento->descripcion}}</td>
                      <td class="celda-cumpleanios-descarga"><a  href="{{url(asset('storage').'/'.$documento->documento)}}" target="_blank"><i class="fa fa-download"></i></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!--
              <ol>
                @foreach ($documentos as $documento )
                <li class="check" >
                  <a  href="{{url(asset('storage').'/'.$documento->documento)}}" target="_blank">
                    <h6><strong>{{$documento->titulo}}</strong> : {{$documento->descripcion}}</h5>
                  </a>
                </li>
                @endforeach
              </ol>
            -->
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
    <!-- End pricing table area -->
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

                  <p></p>
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
                    <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                    <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                    <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                    <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                    <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                    <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
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
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/knob/jquery.knob.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/appear/jquery.appear.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <script src="js/main.js"></script>
    <script src="js/index_scripts.js"></script>
  </body>

  </html>
