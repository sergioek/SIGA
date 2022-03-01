<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'curso'=>'1º',
        ]);
        Curso::create([
            'curso'=>'2º',
        ]);
        Curso::create([
            'curso'=>'3º',
        ]);
        Curso::create([
            'curso'=>'4º',
        ]);

        Curso::create([
            'curso'=>'5º',
        ]);

        Curso::create([
            'curso'=>'6º',
        ]);
    }
}
