<?php

namespace App\Http\Controllers;

use App\Models\Operador;
use Illuminate\Http\Request;

class OperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Operador::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $operador = new Operador();
        $operador->nombres = $request->nombres;
        $operador->apellidos = $request ->apellidos;
        $operador->direccion = $request ->direccion;
        $operador->telefono = $request ->telefono;
        $operador->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Operador $operador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operador $operador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $operador = Operador::find($id);
        $operador->nombres = $request->nombres;
        $operador->apellidos = $request ->apellidos;
        $operador->direccion = $request ->direccion;
        $operador->telefono = $request ->telefono;
        $operador->save();

        return "Actualizado correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $operador = Operador::find($id);
        $operador->delete();

        return "Eliminado correctamente";
    }
}
