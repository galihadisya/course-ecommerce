<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Galih',
            'email' => 'galihadisya@gmail.com',
            'password' => Hash::make('1234'), // Hash berfungsi untuk mengenkripsi password
            'address' => 'jalan jalan',
            'phone' => '081717303058',
        ]);
    }
}
