<div class="form-group row">
    <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

    
    <div class="col-md-6">

        <select id="tipo" class="form-control" @error('tipo') is-invalid @enderror name="tipo" value="{{ old('tipo') }}" required autocomplete="tipo" autofocus>
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
        <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{isset($publication->titulo)?$publication->titulo:old('titulo')}}" required autocomplete="titulo" autofocus>

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
        <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ isset($publication->descripcion)?$publication->descripcion:old('descripcion') }}" required autocomplete="descripcion" autofocus>

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
        <input id="contenido" type="text" class="form-control @error('contenido') is-invalid @enderror" name="contenido" value="{{isset($publication->contenido)?$publication->contenido:old('contenido')}} " required autocomplete="contenido">

        @error('contenido')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
    @if (@isset($publication->imagen))
        <img class="col-md-3"src="{{asset('storage').'/'.$publication->imagen}}" width="100" alt="$publication->imagen">
        
    @endif
        
    <div class="col-md-3">
        
        
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
        <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ isset($publication->link)?$publication->link:old('link') }}"  autocomplete="link">

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
        <input id="fecha_" type="date" class="form-control @error('fecha_inicio') is-invalid @enderror" name="fecha_inicio" value="{{ isset($publication->fecha_inicio)?$publication->fecha_inicio:old('fecha_inicio') }}" required autocomplete="fecha_inicio">

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
        <input id="fecha_" type="date" class="form-control @error('fecha_fin') is-invalid @enderror" name="fecha_fin" value="{{ isset($publication->fecha_fin)?$publication->fecha_fin:old('fecha_fin') }}" required autocomplete="fecha_fin">

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
        <a class="btn btn-success" href="{{url('publication')}}">
            {{ __('Regresar') }}
        </a>
    </div>
</div>
