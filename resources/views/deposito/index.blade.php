codigo de empleado{{$emplead}}
codigo de afiliado {{$afi}}
nombre afiliado {{$nombre}}




<a href="/deposito/create/{{$afi}}/{{$emplead}}/{{$nombre}}">Crear Deposito</a>
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
        @foreach($deposito as $deposito)
        <tr>
            <th>{{$deposito->id}}</th>
            <th>{{$deposito->codempleado}}</th>
            <th>{{$deposito->codafiliado}}</th>
            <th>{{$deposito->nombreafiliado}}</th>
            <th>{{$deposito->fecha}}</th>
            <th>{{$deposito->cantidad}}</th>
        </tr>
     @endforeach


    </tbody>

</table>