<div class="form-group row">
    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

    <div class="col-md-6">
        <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{isset($cumpleanio->nombre)?$cumpleanio->nombre:old('nombre')}}" required autocomplete="nombre" autofocus>

        @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="fecha" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Cumpleaños') }}</label>

    <div class="col-md-6">
        <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" value="{{ isset($cumpleanio->fecha)?$cumpleanio->fecha:old('fecha') }}" required autocomplete="fecha">

        @error('fecha')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

    <div class="col-md-6">
        <input id="departamento" type="text" class="form-control @error('departamento') is-invalid @enderror" name="departamento" value="{{ isset($cumpleanio->departamento)?$cumpleanio->departamento:old('departamento') }}" required autocomplete="departamento" autofocus>

        @error('departamento')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>
    @if (@isset($cumpleanio->foto))
        <img class="col-md-3"src="{{asset('storage').'/'.$cumpleanio->foto}}" width="100" alt="$cumpleanio->foto">
        
    @endif
        
    <div class="col-md-3">
        
        
        <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"  autocomplete="">

        @error('foto')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>