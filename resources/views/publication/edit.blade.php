@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Editar Publicación') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('publication/'.$publication->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PATCH')}}
                        @include('publication.form'); 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection