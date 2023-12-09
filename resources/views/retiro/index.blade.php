codigo de empleado{{$emplead}}
codigo de afiliado {{$afi}}
nombre afiliado {{$nombre}}

<a href="/retiro/create/{{$afi}}/{{$emplead}}/{{$nombre}}">Crear retiro</a>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Id_empleado</th>
        <th>Id_afiliado</th>
        <th>Nombre afiliado</th>
        <th>Fecha</th>
        <th>Cantidad</th>


    </tr>

    </thead>
    <tbody>
        @foreach($retiro as $retiro)
        <tr>
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codempleado}}</th>
            <th>{{$retiro->codafiliado}}</th>
            <th>{{$retiro->nombreafiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->cantidad}}</th>
        </tr>
        @endforeach

    </tbody>

</table>