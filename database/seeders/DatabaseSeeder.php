<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Inscripcion;
use App\Models\Tutor;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(ColegioSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(DivisionSeeder::class);
        $this->call(CicloSeeder::class);
        $this->call(CursoDivisionSeeder::class);
        $this->call(EspacioSeeder::class);
        $this->call(OcupacionSeeder::class);
        $this->call(ParentezcoSeeder::class);
        //Alumno::factory(20)->create();
        //Tutor::factory(20)->create();
        //Inscripcion::factory(10)->create();
    }
}
