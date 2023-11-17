<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Database\Factories\AlumnoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::factory(100)->create();
    }
}
