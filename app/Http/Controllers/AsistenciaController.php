<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Asistencia::all();
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
        $asistencia = new Asistencia();

        $asistencia->id_curso = $request->id_curso;
        $asistencia->id_alumno = $request->id_alumno;
        $asistencia->asistencia = $request->asistencia;
        $asistencia->dia_clase = date('y-m-d');
        
        $asistencia->save();

        return "asistencia registrada correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show($clase)
    {
        return Asistencia::find($clase);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $asistencia = Asistencia::find($id);

        $asistencia->asistencia = $request->asistencia;
        
        $asistencia->save();

        return "asistencia editada correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asistencia = Asistencia::find($id);
        $asistencia->delete();

        return "asistencia eliminado correctamente";
    }
}
