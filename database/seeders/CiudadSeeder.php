<?php

namespace Database\Seeders;

use App\Models\Ciudade;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudade::create([
            'nombre'=>'Ciudad de Fernández',
            'provincia'=>'Santiago del Estero',
        ]);


        Ciudade::create([
            'nombre'=>'Ciudad de Ingeniero Forres',
            'provincia'=>'Santiago del Estero',
        ]);


        Ciudade::create([
            'nombre'=>'Ciudad de Beltrán',
            'provincia'=>'Santiago del Estero',
        ]);

        Ciudade::create([
            'nombre'=>'Parajes',
            'provincia'=>'Santiago del Estero',
        ]);


        Ciudade::create([
            'nombre'=>'Vilmer',
            'provincia'=>'Santiago del Estero',
        ]);

        Ciudade::create([
            'nombre'=>'Ciudad de La Banda',
            'provincia'=>'Santiago del Estero',
        ]);

        Ciudade::create([
            'nombre'=>'Ciudad Capital',
            'provincia'=>'Santiago del Estero',
        ]);

        Ciudade::create([
            'nombre'=>'Suncho Corral',
            'provincia'=>'Santiago del Estero',
        ]);

        Ciudade::create([
            'nombre'=>'Termas del Río Hondo',
            'provincia'=>'Santiago del Estero',
        ]);


        Ciudade::create([
            'nombre'=>'Otras ciudades',
            'provincia'=>'Otra provincia',
        ]);
    
    }
}
