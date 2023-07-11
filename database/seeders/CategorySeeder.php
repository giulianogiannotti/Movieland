<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            'name'=>'Terror'
        ]);

        DB::table('category')->insert([
            'name'=>'Comedia'
        ]);

        DB::table('category')->insert([
            'name'=>'Accion'
        ]);

        DB::table('category')->insert([
            'name'=>'Ciencia ficcion'
        ]);

        DB::table('category')->insert([
            'name'=>'Drama'
        ]);
    }
}
