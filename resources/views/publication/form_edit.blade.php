<div class="form-group row">
    <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

    
    <div class="col-md-6">

        <select id="tipo" class="form-control" @error('tipo') is-invalid @enderror name="tipo" value="{{ $publication->tipo }}" required autocomplete="tipo" autofocus>
            <option value="">-- Seleccionar --</option>
            <option value="anuncio">Anuncio</option>
            <option value="cumpleaños">Cumpleaños</option>
            <option value="documento">Documento</option>
            
        </select>

        
        @error('tipo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

    <div class="col-md-6">
        <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ $publication->titulo }}" required autocomplete="titulo" autofocus>

        @error('titulo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

    <div class="col-md-6">
        <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ $publication->descripcion }}" required autocomplete="descripcion" autofocus>

        @error('descripcion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="contenido" class="col-md-4 col-form-label text-md-right">{{ __('Contenido') }}</label>

    <div class="col-md-6">
        <input id="contenido" type="text" class="form-control @error('contenido') is-invalid @enderror" name="contenido" value="{{ $publication->contenido }}" required autocomplete="contenido">

        @error('contenido')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>

    <div class="col-md-6">
        
        {{$publication->imagen}}
        <input id="imagen" type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen"  autocomplete="">

        @error('imagen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Video') }}</label>

    <div class="col-md-6">
        {{$publication->video}}
        <input id="video" type="file" class="form-control @error('video') is-invalid @enderror" name="video"  autocomplete="video">

        @error('video')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="documento" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>

    <div class="col-md-6">
        {{$publication->documento}}
        <input id="documento" type="file" class="form-control @error('documento') is-invalid @enderror" name="documento"  autocomplete="video">

        @error('documento')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Enlace Externo') }}</label>

    <div class="col-md-6">
        <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ $publication->link }}"  autocomplete="link">

        @error('link')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

    <div class="form-group row">
    <label for="fecha_inicio" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Inicio') }}</label>

    <div class="col-md-6">
        <input id="fecha_" type="date" class="form-control @error('fecha_inicio') is-invalid @enderror" name="fecha_inicio" value="{{ $publication->fecha_inicio }}" required autocomplete="fecha_inicio">

        @error('fecha_inicio')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

    <div class="form-group row">
    <label for="fecha_fin" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Fin') }}</label>

    <div class="col-md-6">
        <input id="fecha_" type="date" class="form-control @error('fecha_fin') is-invalid @enderror" name="fecha_fin" value="{{ $publication->fecha_fin }}" required autocomplete="fecha_fin">

        @error('fecha_fin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Publicar') }}
        </button>
    </div>

    <div class="col-md-6 offset-md-4">
        <a class="btn btn-success" href="{{url('publication/index')}}">
            {{ __('Regresar') }}
        </a>
    </div>
</div>


