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
                    <h2>{{ __('Editar Cumpleaños') }}</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('birthday/'.$birthday->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PATCH')}}
                        @include('publication.form_cumpleanios');  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
