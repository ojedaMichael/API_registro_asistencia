<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cursos = ['matematicas','quimica','fisica','literatura','arte','geografia','historia','finanzas','informatica','ingles'];
        $num = rand(0,9);
        $numID = rand(1,10);
        return [
            'nombre_curso' => $cursos[$num], 
            'id_docente' => $numID, 
        ];
    }
}