<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\retiro;

class retiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id, string $id2,string $marco)
    {
        //
        $datosrtr=retiro::all();
        $empleadot=$id;
        $afi=$id2;
        $nombre=$marco;
        return view('retiro.index')
        ->with('retiro',$datosrtr)
        ->with('afi',$afi)
        ->with('emplead',$empleadot)
        ->with('nombre',$marco);;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $nombre, string $id,string $nmbe )
    {
        //
     $datos=$nombre;
     $empleado=$id;
     $nombre=$nmbe;
     return view('retiro.create')->with('nombre',$datos)->with('idem',$id)->with('nombre1',$nmbe);

    }
    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        //
        $deposito=new retiro();
        $deposito->codempleado=$request->get('codigoEmpleado');
        $deposito->codafiliado=$request->get('codigoAfiliado');
        $deposito->nombreafiliado=$request->get('nombreafi');
        $deposito->fecha=$request->get('fecha');
        $deposito->cantidad=$request->get('cantidad');

        $deposito->save();

        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
