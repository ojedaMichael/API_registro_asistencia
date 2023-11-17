<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        
        $seederDocente = new DocenteSeeder();
        $seederAlumno = new AlumnoSeeder();
        $seederCurso = new CursoSeeder();
        $seederMatricula = new MatriculaSeeder();
        $seederAsistencia = new AsistenciaSeeder();
        
        $seederDocente->run();
        $seederAlumno->run();
        $seederCurso->run();
        $seederMatricula->run();
        $seederAsistencia->run();
    }
}
