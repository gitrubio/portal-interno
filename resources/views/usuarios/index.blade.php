@extends('layouts.app')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet">

@endsection
@section('content')
<div class="container">
<a class="btn btn-primary" href="{{url('user/create')}}">Crear Nuevo Usuario</a>
<br>

@if (Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif
<table id="usuarios" class="table table-sm table-bordered">
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

</div>

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>


    <script>
        /*$(document).ready(function() {
        $('#tabla_anuncios').DataTable(); } );*/
        $('#usuarios').DataTable({
            responsive:true,
            aoutoWidth:false,

            "language": {
            "lengthMenu": "Mostrar " +
                                        `<select class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value='5'>5</option>
                                            <option value='10'>10</option>
                                            <option value='25'>25</option>
                                            <option value='50'>50</option>
                                            <option value='-1'>All</option>
                                        </select>`
                                         + " registros por pagina",
            "zeroRecords": "Ninguna coincidencia - disculpe",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "Ningun registro disponible",
            "infoFiltered": "(filtrados de _MAX_ registros totales)",
            "search": "Buscar",
            "paginate":{
                "next": "siguiente",
                "previous" : "anterior"
            }

        }
        });

    </script>
@endsection