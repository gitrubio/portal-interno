@extends('layouts.app')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet">

@endsection
@section('content')
<div class="container"> 
    <a class="btn btn-primary" href="{{url('publication/create')}}">Crear Nueva Publicacion</a>
    <a class="btn btn-ver-cumpleaños" style="background-color: #cf3b79; color: white" href="{{url('birthday')}}">Ver Cumpleaños</a>
    @if (Auth::user()->rol == "administrador")
    <a class="btn btn-usuarios btn-primary" style="float: right" href="{{url('user')}}">administra usuarios</a>
      @endif
    <br>
    <br>

    @if (Session::has('mensaje'))
        {{Session::get('mensaje')}}
    @endif
    <table id="tabla_anuncios" class="table table-sm table-bordered">
        <thead class="thead-light">
            <tr>
                <!--<th>Id</th>-->
                <th>usuario</th>
                <th>Tipo</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                
                <th>Enlace</th>
                <th>Anexo</th>
             
               
                
                <th>Inicio</th>
                <th>Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $publication)
            <tr>
                <!--<td>{{$publication->id}}</td>-->
                <td>{{$publication->usuario_nombre}}</td>
                <td>{{$publication->tipo}}</td>
                <td>{{$publication->titulo}}</td>
                <td><div class="celda-descripcion">{{$publication->descripcion}}</td>
          
                <td><div class="celda-enlace">{{$publication->link}}</div></td>
                @if (!is_null($publication->imagen))
                <td>
                    <img src="{{asset('storage').'/'.$publication->imagen}}" width="100" alt="{{$publication->imagen}}">
                </td>
                  
                @endif
                @if (!is_null($publication->documento))
                
                    
                    <td><div class="celda-documento">{{$publication->documento}}</div></td>                  
                  
                @endif
                @if (!is_null($publication->video))
                
                    
                        <td><div class="celda-enlace">{{$publication->video}}</div></td>                 
                
                @endif
                

                <!--<td><div class="celda-enlace">{{$publication->video}}</div></td>-->

                {{--  <td><div class="celda-documento">{{$publication->documento}}</div></td>  --}}
                <td>{{$publication->fecha_inicio}}</td>
                <td>{{$publication->fecha_fin}}</td>
                <td class="">
                    <a class="btn btn-success d-inline" href="{{url('publication/'.$publication->id.'/edit')}}">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>

                    <form  action="{{url('/publication/'.$publication->id)}}" class="d-inline" method="POST" >
                        @csrf
                        {{method_field('DELETE')}}
                        <!--<input class="btn btn-danger d-inline" type="submit" onclick="return confirm('¿Quieres eliminar?')" value="Borrar">-->
                        <button class="btn btn-danger d-inline" type="submit" onclick="return confirm('¿Quieres eliminar?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
        $('#tabla_anuncios').DataTable({
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
            },
           

        }
        });

    </script>
@endsection
