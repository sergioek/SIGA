<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create([
            'nombre'=>'CICLO BÁSICO TÉCNICO',
            'resolucion'=>'N° 47/08',
            'años'=>2,
            'titulo'=>'Ninguno',
            'colegio_id'=>1,
        ]);


        Carrera::create([
            'nombre'=>'CICLO SUPERIOR ORIENTADO (MAESTRO MAYOR DE OBRAS)',
            'resolucion'=>'N° 2908/12',
            'años'=>4,
            'titulo'=>'MAESTRO MAYOR DE OBRAS',
            'colegio_id'=>1,
        ]);
        
    }
}

