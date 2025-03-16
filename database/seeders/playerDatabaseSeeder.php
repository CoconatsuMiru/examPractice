<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class playerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('names')->insert([
            ['last_name' => 'Rafols', 'ign' => 'Koffi'],
            ['last_name' => 'Escobar', 'ign' => 'HelloWorld'],
            ['last_name' => 'Palma', 'ign' => 'DivineAttacker'],
        ]);
    }

}
