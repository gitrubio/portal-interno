<section class="container p-t-3">
    <div class="row">
        <div class="col-lg-12">
            <h1>Bootstrap 4 Card Slider</h1>
        </div>
    </div>
</section>
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-md-right lead">
                <a class="btn btn-secondary-outline prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-secondary-outline next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            
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
</section>