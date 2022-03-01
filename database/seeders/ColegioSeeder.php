<?php

namespace Database\Seeders;

use App\Models\Colegio;
use Illuminate\Database\Seeder;

class ColegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Colegio::create([
            'nivel'=>'Secundario',
            'nombre'=>'Escuela Técnica Nº12',
            'direccion'=>'Calle José Cheein - Ciudad de Fernández - Provincia de Santiago del Estero',
            'cue'=>'8602249-00',
            'correo'=>'esctecnica12@gmail.com',
            'telefono'=>'3855881707',
            'rector'=>'Prof. Tito Livio Manfredi',
            'vicerrector'=>'',
            'ciudad_id'=>1,

        ]);

       /*  Colegio::create([
            'nivel'=>'SECUNDARIO',
            'nombre'=>'Escuela Piloto Nº1 Maximio Sabá Victoria',
            'direccion'=>'José Cheein S/N',
            'cue'=>'860120000',
            'rector'=>'Prof. Andrea Sanchez',
            'vicerrector'=>'Prof. José Gómez',
            'ciudad_id'=>1,

        ]);

        Colegio::create([
            'nivel'=>'SECUNDARIO',
            'nombre'=>'Colegio Agrotécnico Madre Tierra',
            'direccion'=>'José Cheein S/N',
            'cue'=>'860175700',
            'ciudad_id'=>1,
        ]);

        Colegio::create([
            'nivel'=>'SECUNDARIO',
            'nombre'=>'Colegio Privado Nuestra Señora del Rosario',
            'direccion'=>'Av. San Martín 114',
            'cue'=>'860020500',
            'ciudad_id'=>1,
        ]);

        Colegio::create([
            'nivel'=>'SECUNDARIO',
            'nombre'=>'Colegio San Isidro Labrador',
            'direccion'=>'Rolando Krugger y John F Kennedy',
            'cue'=>'860067100',
            'ciudad_id'=>2,
        ]);

        Colegio::create([
            'nivel'=>'SECUNDARIO',
            'nombre'=>'Escuela de La Familia Agricola Forres', 
            'direccion'=>'Kilometro 702 Ruta Nacional 34',
            'cue'=>'',
            'ciudad_id'=>2,
        ]);



        Colegio::create([
            'nivel'=>'SECUNDARIO',
            'nombre'=>'Colegio Juan Francisco Maradona',
            'direccion'=>'Mendoza y Corrientes',
            'cue'=>'860066400',
            'ciudad_id'=>3,
        ]);


        Colegio::create([
            'nivel'=>'SECUNDARIO',
            'nombre'=>'COLEGIO SECUNDARIO BUEY MUERTO – SEDE Agrupamiento Nº 86138',
            'direccion'=>'Sin direccíon',
            'cue'=>'860193800',
            'ciudad_id'=>4,
        ]);

        Colegio::create([
            'nivel'=>'SECUNDARIO',
            'nombre'=>'Colegio Privado Ciudad de Beltrán',
            'direccion'=>'Av. San Martin 640',
            'cue'=>'860171200',
            'ciudad_id'=>4,
        ]);


        Colegio::create([
            'nivel'=>'SECUNDARIO',
            'nombre'=>'OTROS COLEGIOS',
            'direccion'=>'Sin direccíon',
            'cue'=>'000000',
            'ciudad_id'=>10,
        ]);

        Colegio::create([
            'nivel'=>'PRIMARIO',
            'nombre'=>'OTRAS ESCUELAS',
            'direccion'=>'Sin direccíon',
            'cue'=>'000000',
            'ciudad_id'=>10,
        ]);

        Colegio::create([
            'nivel'=>'PRIMARIO',
            'nombre'=>'Centro Experimetal Nº4 Maximio S. Victoria',
            'direccion'=>'Av. San Martín 904',
            'cue'=>'860120100',
            'ciudad_id'=>1,
        ]);


        Colegio::create([
            'nivel'=>'PRIMARIO',
            'nombre'=>'Escuela Nº814 Paula Albarracin de Sarmiento',
            'direccion'=>'Av. Jesús Fernández 329',
            'cue'=>'860119800',
            'ciudad_id'=>1,
        ]);


        Colegio::create([
            'nivel'=>'PRIMARIO',
            'nombre'=>'Escuela Nº2 San Francisco de Asis',
            'direccion'=>'Urquiza y Almirante Brown Norte Bario Norte',
            'cue'=>'',
            'ciudad_id'=>1,
        ]);

        Colegio::create([
            'nivel'=>'PRIMARIO',
            'nombre'=>'Escuela Nº1220 Paul Harris',
            'direccion'=>'America Central Entre Balcarce y Bsas 511 Las Americas B.las Americas',
            'cue'=>'',
            'ciudad_id'=>1,
        ]);

        Colegio::create([
            'nivel'=>'PRIMARIO',
            'nombre'=>'Escuela de Educ. Espec. Nº42 Dra Alicia M de Justo',
            'direccion'=>'Independencia S/N  Bº Centro',
            'cue'=>'',
            'ciudad_id'=>1,
        ]);


        Colegio::create([
            'nivel'=>'PRIMARIO',
            'nombre'=>'Escuela Nº972 Profesora Juana Gauna',
            'direccion'=>'Sarmiento S/n Puente Alsina Sarmiento S/nro',
            'cue'=>'',
            'ciudad_id'=>2,
        ]);

        Colegio::create([
            'nivel'=>'PRIMARIO',
            'nombre'=>'Escuela Nº59 Remigio Carol',
            'direccion'=>'España 359 Centro Entre Calles Tucumán y Ramón Carrillo',
            'cue'=>'',
            'ciudad_id'=>3,
        ]);


        Colegio::create([
            'nivel'=>'PRIMARIO',
            'nombre'=>'Escuela Nº99 Lorenzo Goncebat',
            'direccion'=>'Taco Pujio',
            'cue'=>'',
            'ciudad_id'=>4,
        ]);
    
 */
    }
}
