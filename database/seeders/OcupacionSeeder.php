<?php

namespace Database\Seeders;

use App\Models\Ocupacion;
use Illuminate\Database\Seeder;

class OcupacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ocupacion::create([
            'ocupacion'=>'AMA/O DE CASA',
        ]);

        Ocupacion::create([
            'ocupacion'=>'AUTÓNOMO (MONOTRIBUTISTAS Y OTROS REG.)',
        ]);

        Ocupacion::create([
            'ocupacion'=>'EMPLEADO/A PÚBLICO',
        ]);

        Ocupacion::create([
            'ocupacion'=>'EMPLEADO/A PÚBLICO (DOCENTE)',
        ]);

        Ocupacion::create([
            'ocupacion'=>'EMPLEADO/A PÚBLICO (JUDICIAL)',
        ]);


        Ocupacion::create([
            'ocupacion'=>'EMPLEADO/A PÚBLICO (FUERZAS DE SEGURIDAD)',
        ]);

        Ocupacion::create([
            'ocupacion'=>'ESTUDIANTE',
        ]);


        Ocupacion::create([
            'ocupacion'=>'DESEMPLEADO/A',
        ]);

        Ocupacion::create([
            'ocupacion'=>'JUBILADO/A',
        ]);

        Ocupacion::create([
            'ocupacion'=>'OTRA',
        ]);
    }
}
