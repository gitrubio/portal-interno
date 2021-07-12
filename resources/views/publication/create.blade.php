@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-11">
            <div class="card">
                @if (Session::has('mensaje'))
                    {{Session::get('mensaje')}}
                @endif
                <div class="card-header">
                    <h2>{{ __('Nueva Publicación') }}</h2> 
                </div>
                

                <div class="card-body">
                    <div class="form-group row">
                        <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>
                    
                        
                        <div class="col-md-6">
                    
                            <select id="tipo" class="form-control" @error('tipo') is-invalid @enderror name="tipo" value="{{ old('tipo') }}" required autocomplete="tipo" autofocus onchange="seleccionaTipo(value)">
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
                                       
                    <form id="form" style="display: none;" method="POST" action="{{ url('publication') }}" enctype="multipart/form-data"> 
                        @csrf
                        @include('publication.form'); 
                    </form>

                    <form id="form_documento" style="display: none;" method="POST" action="{{ url('publication') }}" enctype="multipart/form-data"> 
                        @csrf
                        @include('publication.form_documento'); 
                    </form>

                    <form id="form_cumpleanios" style="display: none;" method="POST" action="{{ url('birthday') }}" enctype="multipart/form-data"> 
                        @csrf
                        @include('publication.form_cumpleanios'); 
                    </form>

                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection