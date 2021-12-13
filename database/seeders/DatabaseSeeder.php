<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //  \App\Models\User::factory(10)->create();
       $classes = [

            [31, '3 A', 'Troisième'],
            [32, '3 B', 'Troisième'],
            [33, '3 C', 'Troisième'],
            [41, '4 A', 'Quatrième'],
            [42, '4 B', 'Quatrième'],
            [43, '4 C', 'Quatrième'],
            [51, '5 A', 'Cinquième'],
            [52, '5 B', 'Cinquième'],
            [53, '5 C', 'Cinquième'],
            [61, '6 A', 'Sixième'],
            [62, '6 B', 'Sixième'],
            [63, '6 C', 'Sixième'],
        ];

        foreach($classes as $key => $classe) {
            \App\Models\Classeroom::create([
                'refClasse' => $classe[0],
                'libClasse' => $classe[1],
                'niveau'    => $classe[2],
            ]);
        }
    }
}
