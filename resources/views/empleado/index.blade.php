
<a href="/empleado/create"class="btn btn-success">Crear empleado</a>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Accion</th>


    </tr>

    </thead>
    <tbody>
        @foreach($datosempleado as $empleado)
        <tr>
            <th>{{$empleado->id}}</th>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th><a href="\afiliado\{{$empleado->id}}">Afiliados</a></th>
        </tr>
        @endforeach

    </tbody>

</table>