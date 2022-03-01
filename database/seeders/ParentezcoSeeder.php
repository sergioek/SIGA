<?php

namespace Database\Seeders;

use App\Models\Parentezco;
use Illuminate\Database\Seeder;

class ParentezcoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parentezco::create([
            'parentezco'=>'MADRE',
        ]);

        Parentezco::create([
            'parentezco'=>'PADRE',
        ]);

        Parentezco::create([
            'parentezco'=>'HERMANO/A',
        ]);

        Parentezco::create([
            'parentezco'=>'TIA',
        ]);

        Parentezco::create([
            'parentezco'=>'TIO',
        ]);

        Parentezco::create([
            'parentezco'=>'PRIMO/A',
        ]);

        Parentezco::create([
            'parentezco'=>'MADRASTRA',
        ]);

        Parentezco::create([
            'parentezco'=>'PADRASTRO',
        ]);

        Parentezco::create([
            'parentezco'=>'TENENCIA JUDICIAL',
        ]);


        Parentezco::create([
            'parentezco'=>'OTRO',
        ]);
    }
}
