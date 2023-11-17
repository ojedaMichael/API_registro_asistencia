<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Matricula::all();
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
    public function store(Request $request, $id)
    {
        $matricula = new Matricula();

        $matricula->id_curso = $request->id_curso;
        $matricula->id_alumno = $id;
        $matricula->dia_inscripcion = date('y-m-d');
        
        $matricula->save();

        return "matricula registrada correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Matricula::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $matricula = Matricula::find($id);

        $matricula->id_curso = $request->id_curso;
        
        $matricula->save();

        return "matricula actualizada correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $matricula = Matricula::find($id);
        $matricula->delete();

        return "matricula eliminada correctamente";
    }
}
