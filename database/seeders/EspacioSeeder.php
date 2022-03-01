<?php

namespace Database\Seeders;

use App\Models\Espacio;
use Illuminate\Database\Seeder;

class EspacioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Espacios 1º ----------
        Espacio::create([
            'nombre'=>'Geografía',
            'turno'=>'MAÑANA',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>3,
        ]);

        Espacio::create([
            'nombre'=>'Historia',
            'turno'=>'MAÑANA',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>3,
        ]);

        Espacio::create([
            'nombre'=>'Lengua',
            'turno'=>'MAÑANA',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>4,
        ]);

        Espacio::create([
            'nombre'=>'Lengua Extranjera (Inglés)',
            'turno'=>'MAÑANA',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>3,
        ]);

        Espacio::create([
            'nombre'=>'Educación Física',
            'turno'=>'TARDE',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>3,
        ]);


        Espacio::create([
            'nombre'=>'Formación Ética y Ciudadana',
            'turno'=>'MAÑANA',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>2,
        ]);

        Espacio::create([
            'nombre'=>'Educación Artistica',
            'turno'=>'MAÑANA',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>3,
        ]);

        Espacio::create([
            'nombre'=>'Biología',
            'turno'=>'MAÑANA',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>4,
        ]);

        Espacio::create([
            'nombre'=>'Matemáticas',
            'turno'=>'MAÑANA',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>5,
        ]);


        Espacio::create([
            'nombre'=>'Educación Tecnológica',
            'turno'=>'MAÑANA',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>3,
        ]);


        Espacio::create([
            'nombre'=>'Dibujo Técnico',
            'turno'=>'MAÑANA',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>3,
        ]);


        Espacio::create([
            'nombre'=>'Taller',
            'turno'=>'TARDE',
            'curso_id'=>1,
            'carrera_id'=>1,
            'horas'=>10,
        ]);
//------------fin espacios 1º--------------------------------



    //Espacios 2º ----------
    Espacio::create([
        'nombre'=>'Geografía',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>2,
    ]);

    Espacio::create([
        'nombre'=>'Historia',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>2,
    ]);

    Espacio::create([
        'nombre'=>'Lengua',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>4,
    ]);

    Espacio::create([
        'nombre'=>'Lengua Extranjera (Inglés)',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>3,
    ]);

    Espacio::create([
        'nombre'=>'Educación Física',
        'turno'=>'TARDE',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>3,
    ]);


    Espacio::create([
        'nombre'=>'Formación Ética y Ciudadana',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>2,
    ]);

    Espacio::create([
        'nombre'=>'Educación Artistica',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>3,
    ]);

    Espacio::create([
        'nombre'=>'Física',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>4,
    ]);

    Espacio::create([
        'nombre'=>'Matemáticas',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>5,
    ]);


    Espacio::create([
        'nombre'=>'Educación Tecnológica',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>3,
    ]);


    Espacio::create([
        'nombre'=>'Dibujo Técnico',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>3,
    ]);


    Espacio::create([
        'nombre'=>'Química',
        'turno'=>'MAÑANA',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>3,
    ]);


    Espacio::create([
        'nombre'=>'Taller',
        'turno'=>'TARDE',
        'curso_id'=>2,
        'carrera_id'=>1,
        'horas'=>10,
    ]);
//------------fin espacios 2º--------------------------------

//------ Espacios de 3º

    Espacio::create([
        'nombre'=>'Lengua y Literatura',
        'turno'=>'MAÑANA',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>3,
    ]);

    Espacio::create([
        'nombre'=>'Formación Ética y Ciudadana',
        'turno'=>'MAÑANA',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>2,
    ]);

    Espacio::create([
        'nombre'=>'Lengua Extranjera (Inglés)',
        'turno'=>'MAÑANA',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>3,
    ]);


    Espacio::create([
        'nombre'=>'Geografía',
        'turno'=>'MAÑANA',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>3,
    ]);


    Espacio::create([
        'nombre'=>'Educación Física',
        'turno'=>'TARDE',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>3,
    ]);


    Espacio::create([
        'nombre'=>'Matemáticas',
        'turno'=>'MAÑANA',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>6,
    ]);

    Espacio::create([
        'nombre'=>'Física Aplicada',
        'turno'=>'MAÑANA',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>4,
    ]);



    Espacio::create([
        'nombre'=>'Química de los Materiales para la Construcción',
        'turno'=>'MAÑANA',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>3,
    ]);

    
    Espacio::create([
        'nombre'=>'Materiales para la Construcción I',
        'turno'=>'MAÑANA-TARDE',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>3,
    ]);


    Espacio::create([
        'nombre'=>'Representación Gráfica',
        'turno'=>'MAÑANA',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>4,
    ]);


    Espacio::create([
        'nombre'=>'Sistemas Edilicios I',
        'turno'=>'TARDE',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>3,
    ]);


    Espacio::create([
        'nombre'=>'Taller',
        'turno'=>'TARDE',
        'curso_id'=>3,
        'carrera_id'=>2,
        'horas'=>10,
    ]);
// fin espacios 3º---------------------------



//------ Espacios de 4º

Espacio::create([
    'nombre'=>'Lengua y Literatura',
    'turno'=>'MAÑANA',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>3,
]);

Espacio::create([
    'nombre'=>'Formación Ética y Ciudadana',
    'turno'=>'MAÑANA',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>2,
]);

Espacio::create([
    'nombre'=>'Lengua Extranjera (Inglés)',
    'turno'=>'MAÑANA',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>3,
]);


Espacio::create([
    'nombre'=>'Historia',
    'turno'=>'MAÑANA',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>3,
]);


Espacio::create([
    'nombre'=>'Educación Física',
    'turno'=>'TARDE',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>3,
]);


Espacio::create([
    'nombre'=>'Matemáticas',
    'turno'=>'MAÑANA',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>5,
]);


Espacio::create([
    'nombre'=>'Materiales para la Construcción II',
    'turno'=>'MAÑANA',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>3,
]);


Espacio::create([
    'nombre'=>'Sistemas Edilicios II',
    'turno'=>'TARDE',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>3,
]);

Espacio::create([
    'nombre'=>'Proyecto I',
    'turno'=>'MAÑANA',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>5,
]);


Espacio::create([
    'nombre'=>'Estructuras I',
    'turno'=>'MAÑANA-TARDE',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>8,
]);

Espacio::create([
    'nombre'=>'Instalaciones I',
    'turno'=>'MAÑANA',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>3,
]);


Espacio::create([
    'nombre'=>'Taller',
    'turno'=>'TARDE',
    'curso_id'=>4,
    'carrera_id'=>2,
    'horas'=>10,
]);
// fin espacios 4º---------------------------



//------ Espacios de 5º

Espacio::create([
    'nombre'=>'Lengua y Literatura',
    'turno'=>'MAÑANA',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>3,
]);

Espacio::create([
    'nombre'=>'Formación Ética y Ciudadana',
    'turno'=>'MAÑANA',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>2,
]);

Espacio::create([
    'nombre'=>'Inglés Técnico',
    'turno'=>'MAÑANA',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>2,
]);


Espacio::create([
    'nombre'=>'Educación Física',
    'turno'=>'TARDE',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>3,
]);


Espacio::create([
    'nombre'=>'Matemáticas',
    'turno'=>'MAÑANA',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>2,
]);


Espacio::create([
    'nombre'=>'Materiales para la Construcción III',
    'turno'=>'MAÑANA',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>3,
]);


Espacio::create([
    'nombre'=>'Normativa para la Construcción I',
    'turno'=>'MAÑANA',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>3,
]);


Espacio::create([
    'nombre'=>'Sistemas Edilicios III',
    'turno'=>'MAÑANA',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>3,
]);

Espacio::create([
    'nombre'=>'Proyecto II',
    'turno'=>'MAÑANA',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>6,
]);


Espacio::create([
    'nombre'=>'Estructuras II',
    'turno'=>'TARDE',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>8,
]);

Espacio::create([
    'nombre'=>'Instalaciones II',
    'turno'=>'TARDE',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>6,
]);


Espacio::create([
    'nombre'=>'Taller',
    'turno'=>'TARDE',
    'curso_id'=>5,
    'carrera_id'=>2,
    'horas'=>10,
]);
// fin espacios 5º---------------------------


//------ Espacios de 6º

Espacio::create([
    'nombre'=>'Lengua',
    'turno'=>'MAÑANA',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>2,
]);

Espacio::create([
    'nombre'=>'Formación Ética y Ciudadana',
    'turno'=>'MAÑANA',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>2,
]);

Espacio::create([
    'nombre'=>'Inglés Técnico',
    'turno'=>'MAÑANA',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>2,
]);


Espacio::create([
    'nombre'=>'Matemáticas',
    'turno'=>'MAÑANA',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>2,
]);


Espacio::create([
    'nombre'=>'Normativa para la Construcción II',
    'turno'=>'MAÑANA',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>2,
]);


Espacio::create([
    'nombre'=>'Administración de Obras',
    'turno'=>'TARDE',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>4,
]);


Espacio::create([
    'nombre'=>'Gerenciamiento de Obras',
    'turno'=>'MAÑANA',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>3,
]);


Espacio::create([
    'nombre'=>'Proyecto III',
    'turno'=>'MAÑANA',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>6,
]);


Espacio::create([
    'nombre'=>'Estructuras III',
    'turno'=>'MAÑANA',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>8,
]);

Espacio::create([
    'nombre'=>'Proyecto de Instalaciones',
    'turno'=>'MAÑANA',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>3,
]);



Espacio::create([
    'nombre'=>'Mediciones de Campos',
    'turno'=>'TARDE',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>5,
]);



Espacio::create([
    'nombre'=>'Instalaciones Electromecánicas',
    'turno'=>'TARDE',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>3,
]);


Espacio::create([
    'nombre'=>'Prácticas Profesionalizantes',
    'turno'=>'TARDE',
    'curso_id'=>6,
    'carrera_id'=>2,
    'horas'=>10,
]);

// fin espacios 6º---------------------------


    }
}
