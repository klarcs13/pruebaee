Id afiliado {{$nombre}}
id empleado {{$idem}}
Nombre afiliado {{$nombre1}}


<form action="/deposito"class= "form-control"method ="POST">
   @csrf
 <label for="">codigo empleado</label>
 <input type="text" id="codigoEmpleado" value="{{$idem}}" name="codigoEmpleado">

 <label for="">Codigo afiliado</label>
 <input type="text" id="codigoAfiliado" value="{{$nombre}}"name="codigoAfiliado">

 <label for="">Nombre afiliado</label>
 <input type="text" id="nombreafi" value="{{$nombre1}}" name="nombreafi" >

 <label for="">Fecha</label>
 <input type="text" id="fecha" placeholder="2023-11-08" name="fecha" >

 <label for="">Cantidad</label>
 <input type="text" id="cantidad" placeholder="2000" name="cantidad" >


 <div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/empleado" class="btn btn-danger">Cancelar</a>

 </div>



</form>