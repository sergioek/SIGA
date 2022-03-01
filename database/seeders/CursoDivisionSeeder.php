<?php

namespace Database\Seeders;

use App\Models\CursoDivision;
use Illuminate\Database\Seeder;

class CursoDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CursoDivision::create([
            'curso_id'=>1,
            'division_id'=>1,
            'carrera_id'=>1,
            'preceptor'=>'GOMEZ PACHECO, Pamela',
        ]);


        CursoDivision::create([
            'curso_id'=>1,
            'division_id'=>2,
            'carrera_id'=>1,
            'preceptor'=>'GOMEZ PACHECO, Pamela',
        ]);

        CursoDivision::create([
            'curso_id'=>1,
            'division_id'=>3,
            'carrera_id'=>1,
            'preceptor'=>'GOMEZ PACHECO, Pamela',
        ]);


        CursoDivision::create([
            'curso_id'=>2,
            'division_id'=>1,
            'carrera_id'=>1,
            'preceptor'=>'DELLA ROSA, Antonela',
        ]);


        CursoDivision::create([
            'curso_id'=>2,
            'division_id'=>2,
            'carrera_id'=>1,
            'preceptor'=>'DELLA ROSA, Antonela',
        ]);


        CursoDivision::create([
            'curso_id'=>3,
            'division_id'=>1,
            'carrera_id'=>2,
            'preceptor'=>'DELLA ROSA, Antonela',
        ]);

        CursoDivision::create([
            'curso_id'=>3,
            'division_id'=>2,
            'carrera_id'=>2,
            'preceptor'=>'DELLA ROSA, Antonela',
        ]);


        CursoDivision::create([
            'curso_id'=>4,
            'division_id'=>1,
            'carrera_id'=>2,
            'preceptor'=>'RODRIGUEZ, Celeste',
        ]);

        CursoDivision::create([
            'curso_id'=>5,
            'division_id'=>1,
            'carrera_id'=>2,
            'preceptor'=>'RODRIGUEZ, Celeste',
        ]);


        CursoDivision::create([
            'curso_id'=>6,
            'division_id'=>1,
            'carrera_id'=>2,
            'preceptor'=>'RODRIGUEZ, Celeste',
        ]);
    }
}
