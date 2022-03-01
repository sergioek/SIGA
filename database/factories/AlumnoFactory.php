<?php

namespace Database\Factories;

use App\Models\Ciudade;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'apellidos'=>strtoupper($this->faker->word(8)),
            'nombres'=>$this->faker->word(8),
            'nacionalidad'=>$this->faker->randomElement(['ARG','COL','BRA']),
            'dni'=>$this->faker->unique->randomNumber(8),
            'cuil'=>$this->faker->unique->randomNumber(8),
            'sexo'=>$this->faker->randomElement(['M','F']),
            'fnacimiento'=>$this->faker->date('Y-m-d'),
            'lnacimiento'=>$this->faker->word(8),
            'direccion'=>$this->faker->word(8),
            'legajo'=>$this->faker->unique->randomNumber(4),
            'discapacidad'=>$this->faker->randomElement(['SI','NO']),
            'tipo_discapacidad'=>$this->faker->randomElement(['Sensorial','Intelectual','Visceral']),
            'auh'=>$this->faker->randomElement(['SI','NO']),
            'obrasocial'=>$this->faker->randomElement(['SI','NO']),
            'domicilio_id'=>Ciudade::all()->random()->id,
        ];
    }
}
