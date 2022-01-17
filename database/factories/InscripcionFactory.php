<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\Ocupacion;
use App\Models\Parentezco;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

class InscripcionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pase'=>$this->faker->randomElement(['SI','NO']),
            'repitente'=>$this->faker->randomElement(['SI','NO']),
            'documentacion_completa'=>$this->faker->randomElement(['SI','NO']),
            'observaciones'=>$this->faker->text(50),
           // 'ciclo_id'=>Ciclo::all()->random()->id,
            'ciclo_id'=>6,
            'curso_id'=>Curso::all()->random()->id,
            'alumno_id'=>Alumno::all()->random()->id,
            'tutor_id'=>Tutor::all()->random()->id,
            'parentezco_id'=>Parentezco::all()->random()->id,
            'ocupacion_id'=>Ocupacion::all()->random()->id,
        ];
    }
}
