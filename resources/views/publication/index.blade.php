<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Tipo</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Contenido</th>
            <th>Enlace Externo</th>
            <th>Foto</th>
            <th>Video</th>
            <th>Documento</th>
            <th>Inicio</th>
            <th>Fin</th>
            <th>Acciones</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($publications as $publication)
        <tr>
            <td>{{publication->id}}</td>
            <td>{{publication->tipo}}</td>
            <td>{{publication->titulo}}</td>
            <td>{{publication->descripcion}}</td>
            <td>{{publication->contenido}}</td>
            <td>{{publication->link}}</td>
            <td>{{publication->foto}}</td>
            <td>{{publication->video}}</td>
            <td>{{publication->documento}}</td>
            <td>{{publication->fecha_inicio}}</td>
            <td>{{publication->fecha_fin}}</td>
        </tr>    
        @endforeach
        
    </tbody>
</table>