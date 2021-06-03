@extends('layouts.app')    
@section('content')
<div class="container">
<a class="btn btn-primary" href="{{url('publication/create')}}">Crear Nueva Publicacion</a>
<br>
<br>
@if (Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif
<table class="table table-light">
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
            <td>{{$publication->descripcion}}</td>
            <td>{{$publication->contenido}}</td>
            <td>{{$publication->link}}</td>
            <td>
                <img src="{{asset('storage').'/'.$publication->imagen}}" width="100" alt="{{$publication->imagen}}">    
            </td>
            <td>
               <!-- <iframe width="150" height="100" frameborder="0" allowfullscreen=""   src="{{$publication->video}}">-->
               
            </td>
            <td>{{$publication->documento}}</td>
            <td>{{$publication->fecha_inicio}}</td>
            <td>{{$publication->fecha_fin}}</td>
            <td>
                <a class="btn btn-success" href="{{url('publication/'.$publication->id.'/edit')}}">
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
