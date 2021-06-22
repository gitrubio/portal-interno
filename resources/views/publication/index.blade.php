@extends('layouts.app')
@section('content')
<div class="container">
<a class="btn btn-primary" href="{{url('publication/create')}}">Crear Nueva Publicacion</a>
<br>

@if (Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif
<table class="table table-sm table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Contenido</th>
            <th>Enlace</th>
            <th>Foto</th>
            <th>Video</th>
            <th>Documento</th>
            <th>Inicio</th>
            <th>Fin</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datos as $publication)
        <tr>
            <td>{{$publication->id}}</td>
            <td>{{$publication->tipo}}</td>
            <td>{{$publication->titulo}}</td>
            <td><div class="celda-descripcion">{{$publication->descripcion}}</td>
            <td><div class="celda-contenido">{{$publication->contenido}}</div></td>
            <td><div class="celda-enlace">{{$publication->link}}</div></td>
            <td>
                <img src="{{asset('storage').'/'.$publication->imagen}}" width="100" alt="{{$publication->imagen}}">
            </td>

            <td><div class="celda-enlace">{{$publication->video}}</div></td>

            <td><div class="celda-documento">{{$publication->documento}}</div></td>
            <td>{{$publication->fecha_inicio}}</td>
            <td>{{$publication->fecha_fin}}</td>
            <td class="col-2">
                <a class="btn btn-success d-inline" href="{{url('publication/'.$publication->id.'/edit')}}">
                    Editar
                </a>

                <form  action="{{url('/publication/'.$publication->id)}}" class="d-inline" method="POST" >
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger d-inline" type="submit" onclick="return confirm('¿Quieres eliminar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{!!$datos->links()!!}
</div>

@endsection
