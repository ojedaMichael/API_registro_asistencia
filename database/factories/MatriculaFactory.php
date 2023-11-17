<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numID = rand(1,10);
        $numAlumnos = rand(1,100);
        return [
            'id_curso' => $numID,
            'id_alumno' => $numAlumnos,
            'dia_inscripcion' => fake()->date(),
        ];
    }
}
