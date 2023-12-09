<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\afiliado;

class afiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        //
        $datosafiliado= afiliado::all();
        $datoempleado=$id;
        return view('afiliado.index')->with('afiliado',$datosafiliado)->with('emplead',$datoempleado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('afiliado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empelado = new afiliado();
        $empelado->nombre=$request->get('nombre');
        $empelado->apellido=$request->get('apellido');
        $empelado -> save();



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
