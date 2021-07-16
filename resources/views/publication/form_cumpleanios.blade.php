<div class="form-group row">
    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

    <div class="col-md-6">
        <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{isset($birthday->nombre)?$birthday->nombre:old('nombre')}}" required autocomplete="nombre" autofocus>

        @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>

    <div class="col-md-6">
        <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ isset($birthday->area)?$birthday->area:old('area') }}" required autocomplete="area" autofocus>

        @error('area')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<div class="form-group row">
    <label for="fecha" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Cumpleaños') }}</label>

    <div class="col-md-6">
        <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" value="{{ isset($birthday->fecha)?$birthday->fecha:old('fecha') }}" required autocomplete="fecha">

        @error('fecha_inicio')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>
    @if (@isset($birthday->foto))
        <img class="col-md-3"src="{{asset('storage').'/'.$birthday->foto}}" width="100" alt="$birthday->foto">
        
    @endif
        
    <div class="col-md-4">
        
        
        <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"  autocomplete="">

        @error('foto')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<div class="form-group row mb-0">
    <div class="col-md-4"></div>
    
    <div class="col-md-3 offset-md-4">
        <button type="submit" class="btn btn-primary"> 
            {{ __('Publicar') }}
        </button>
    </div>
    <div class="col-md-3 offset-md-4">
        <a class="btn btn-success" href="{{url('birthday')}}">
            {{ __('Regresar') }}
        </a>
    </div>
</div>