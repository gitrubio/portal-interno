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
                    <form method="POST" action="{{ url('publication') }}" enctype="multipart/form-data"> 
                        @csrf
                        @include('publication.form'); 
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection