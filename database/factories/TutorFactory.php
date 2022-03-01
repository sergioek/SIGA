<?php

namespace Database\Factories;

use App\Models\Ciudade;
use Illuminate\Database\Eloquent\Factories\Factory;

class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'apellido'=>strtoupper($this->faker->word(8)),
            'nombre'=>$this->faker->word(8),
            'tutordni'=>$this->faker->unique->randomNumber(8),
            'tutorcuil'=>$this->faker->unique->randomNumber(8),
            'tutordireccion'=>$this->faker->word(8),
            'telefono'=>$this->faker->word(14),
            'email'=>$this->faker->email(),
            
        ];
    }
}
