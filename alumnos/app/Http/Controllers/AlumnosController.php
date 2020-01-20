<?php

namespace App\Http\Controllers;

use App\alumnos;
use Illuminate\Http\Request;
use App;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumnoAgregar = new alumnos;
        $alumnoAgregar->nombre = $request->nombre;
        $alumnoAgregar->correo = $request->correo;
        $alumnoAgregar->created_at = $request->created_at;
        $alumnoAgregar->save();
        return back()->with('agregar', 'El alumno fue agregado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show(alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit(alumnos $alumnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alumnos $alumnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(alumnos $alumnos)
    {
        //
    }
}
