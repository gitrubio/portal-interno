@extends('layouts.app')    
@section('content')
<table class="table table-light">
    <thead class="thead-light"> 
        <tr>
            <th>#</th>
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
            <td>{{$publication->foto}}</td>
            <td>{{$publication->video}}</td>
            <td>{{$publication->documento}}</td>
            <td>{{$publication->fecha_inicio}}</td>
            <td>{{$publication->fecha_fin}}</td>
            <td>
                <a href="{{url('publication/'.$publication->id.'/edit')}}">
                    Editar |
                </a>
                <form action="{{url('/publication/'.$publication->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres eliminar?')" value="delete">
                </form>
            </td>
        </tr>    
        @endforeach
        
    </tbody>
</table>
@endsection    
