<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Tito Livio Manfredi',
            'email'=>'titoliviomanfredi@hotmail.com',
            'password'=>bcrypt('tito12345'),

        ]);
    }
}
