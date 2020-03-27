<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Alfa'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Beta'
        ]);

        DB::table('categories')->insert([
            'name' => 'Omega'
        ]);

        DB::table('categories')->insert([
            'name' => 'Diamond'
        ]);

    }
}
