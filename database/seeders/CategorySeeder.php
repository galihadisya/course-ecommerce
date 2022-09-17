<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

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
            'name' => 'Baju'
        ]);

        DB::table('categories')->insert([
            'name' => 'Celana'
        ]);

        DB::table('categories')->insert([
            'name' => 'Topi'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jaket'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sepatu'
        ]);
    }
}
