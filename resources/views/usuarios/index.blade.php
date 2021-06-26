@extends('layouts.app')
@section('content')
<div class="container">
<a class="btn btn-primary" href="{{url('user/create')}}">Crear Nuevo Usuario</a>
<br>

@if (Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif
<table class="table table-sm table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Rol</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->rol}}</td>
            <td>{{$usuario->username}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td class="col-2">
                <a class="btn btn-success d-inline" href="{{url('user/'.$usuario->id.'/edit')}}">
                    Editar
                </a>

                <form  action="{{url('/user/'.$usuario->id)}}" class="d-inline" method="POST" >
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger d-inline" type="submit" onclick="return confirm('¿Quieres eliminar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{!!$usuarios->links()!!}
</div>

@endsection