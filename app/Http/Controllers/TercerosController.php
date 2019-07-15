<?php

namespace App\Http\Controllers;

use App\terceros;
use Illuminate\Http\Request;
use Session;

class TercerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terceros = terceros::paginate(10);
        return view('terceros.index', compact('terceros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terceros.create');
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
            'cedula' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'contacto' => 'required',
        ]);
        terceros::create($request->all());
        session::flash('message','Usuario Agregado Correctamente');
        return redirect()->route('terceros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\terceros  $terceros
     * @return \Illuminate\Http\Response
     */
    public function show(terceros $terceros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\terceros  $terceros
     * @return \Illuminate\Http\Response
     */
    public function edit(terceros $terceros)
    {
        return view('terceros.edit', compact('terceros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\terceros  $terceros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, terceros $terceros)
    {
        $request->validate([
            'cedula' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'contacto' => 'required',
        ]);
        $terceros->update($request->all());
        Session::flash('message','Usuario Actualizado Correctamente');
        return redirect()->route('terceros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\terceros  $terceros
     * @return \Illuminate\Http\Response
     */
    public function destroy(terceros $terceros)
    {
        $terceros->delete();
        session::flash('message','Usuario Eliminado Correctamente');
        return redirect()->route('terceros.index');
    }
}
