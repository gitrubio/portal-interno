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
                    <h2>{{ __('Editar Usuario') }}</h2> 
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('user/'.$usuario->id) }}">
                        @csrf
                        {{method_field('PATCH')}}
                        @include('usuarios.form'); 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection