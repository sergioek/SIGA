<?php

namespace Database\Seeders;

use App\Models\Ciclo;
use Illuminate\Database\Seeder;

class CicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Ciclo::create([
            'ciclo'=>'2016',
            'lema'=>'Año del Bicentenario de la Declaración de la Independencia Nacional',
            'inicio'=>'2016-02-15',
            'cierre'=>'2016-12-22',
            'colegio_id'=>1,
            'estado'=>'INACTIVO',
        ]);

        Ciclo::create([
            'ciclo'=>'2017',
            'lema'=>'Año de las Energías Renovables',
            'inicio'=>'2017-02-20',
            'cierre'=>'2017-12-22',
            'colegio_id'=>1,
            'estado'=>'INACTIVO',
        ]);

        Ciclo::create([
            'ciclo'=>'2018',
            'lema'=>'Año del Centenario de la Reforma Universitaria',
            'inicio'=>'2018-02-19',
            'cierre'=>'2018-12-21',
            'colegio_id'=>1,
            'estado'=>'INACTIVO',
        ]);


        Ciclo::create([
            'ciclo'=>'2019',
            'lema'=>'Año de la Exportación',
            'inicio'=>'2019-02-18',
            'cierre'=>'2019-12-20',
            'colegio_id'=>1,
            'estado'=>'INACTIVO',
        ]);

        Ciclo::create([
            'ciclo'=>'2020',
            'lema'=>'Año del Bicentenario de la Autonomía Provincial',
            'inicio'=>'2020-02-17',
            'cierre'=>'2020-12-18',
            'colegio_id'=>1,
            'estado'=>'INACTIVO',
        ]);

        Ciclo::create([
            'ciclo'=>'2021',
            'lema'=>'Año del Homenaje al Premio Nobel de Medicina Dr. Cesár Milstein',
            'inicio'=>'2021-02-08',
            'cierre'=>'2021-12-23
            ',
            'colegio_id'=>1,
            'estado'=>'ACTIVO',
        ]);
    }
}
