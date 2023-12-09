
<br>codigo de empelado {{$emplead}} </br>

<a href="/afiliado2/create"class="btn btn-success">Crear afiliado</a>


<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>
            acciones
        </th>

    </tr>

    </thead>
    <tbody>
        @foreach($afiliado as $afiliado)
        <tr>
            <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th><a href="/retiro/{{$emplead}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Retiro</a></th>
            <th><a href="/deposito/{{$emplead}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Deposito</a></th>
        </tr>
        @endforeach


    </tbody>

</table>