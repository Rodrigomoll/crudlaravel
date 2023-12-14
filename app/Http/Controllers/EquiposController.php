<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos=  Equipos::all();
        return view('equipo', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createequipo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $equipos = new Equipos();
        $equipos->nombre = $request->nombre;
        $equipos->ciudad = $request->ciudad;
        $equipos->pais = $request->pais;
        $equipos->save();

        return redirect()->route('equipos.index')->with('success', 'El equipo se guardó correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipos $equipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipos = Equipos::find($id);
        return view('editequipo', compact('equipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $equipos = Equipos::find($id);
        $equipos->nombre = $request->nombre;
        $equipos->ciudad = $request->ciudad;
        $equipos->pais = $request->pais;
        $equipos->save();

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $equipos = Equipos::find($id);
        $equipos->delete();

        return "Eliminado correctamente";
    }
}
