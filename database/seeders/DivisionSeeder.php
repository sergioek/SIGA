<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create([
            'division'=>'A',
        ]);

        Division::create([
            'division'=>'B',
        ]);

        Division::create([
            'division'=>'C',
        ]);

        Division::create([
            'division'=>'D',
        ]);

        Division::create([
            'division'=>'E',
        ]);

        Division::create([
            'division'=>'F',
        ]);

        Division::create([
            'division'=>'G',
        ]);
    }
}
