<?php

namespace App\Http\Controllers;

use App\vehiculos;
use Illuminate\Http\Request;
use Session;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = vehiculos::paginate(10);
        return view('vehiculos.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vin' => 'required',
            'placa' => 'required',
            'modelo' => 'required',
            'año' => 'required',
            'color' => 'required',
            'kilometraje' => 'required',
            'terceroasignado' => 'required',
        ]);
        vehiculos::create($request->all());
        Session::flash('message','Usuario Agregado Correctamente');
        return redirect()->route('vehiculos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function show(vehiculos $vehiculos)
    {
        return view('vehiculos.show', compact('vehiculos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function edit(vehiculos $vehiculos)
    {
        return view('vehiculos.edit', compact('vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vehiculos $vehiculos)
    {
        $request->validate([
            'vin' => 'required',
            'placa' => 'required',
            'modelo' => 'required',
            'año' => 'required',
            'color' => 'required',
            'kilometraje' => 'required',
            'terceroasignado' => 'required',
        ]);
        $vehiculos->update($request->all());
        Session::flash('message','Usuario Actualizado Correctamente');
        return redirect()->route('vehiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehiculos $vehiculos)
    {
        $vehiculos->delete();
        session::flash('message','vehiculo Eliminado Correctamente');
        return redirect()->route('vehiculos.index');
    }
}
