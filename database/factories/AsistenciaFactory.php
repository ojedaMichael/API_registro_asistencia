<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $num = rand(1,10);
        $numAsistencia = rand(0,2);
        $asistencia = ['A','T','F'];
        $numAlumnos = rand(1,100);
        return [
            'id_curso' => $num,
            'id_alumno' => $numAlumnos,
            'asistencia' => $asistencia[$numAsistencia],
            'dia_clase' => fake()->date(),
        ];
    }
}
