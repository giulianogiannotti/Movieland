<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie')->insert([
            'title'=>'Jurassic World',
            'description'=>'Una nueva especie de dinosaurio, creada por los científicos de forma artificial, es más inteligente y peligrosa que los animales conocidos y termina por atacar a los turistas que visitan el parque temático Jurassic World, situado en una isla frente a Costa Rica.',
            'duration' => '126 min',
            'director' => 'Colin Trevorrow',
            'year' => 2015,
            'url' => 'https://www.youtube.com/watch?v=RFinNxS5KN4&pp=ygUWanVyYXNzaWMgd29ybGQgdHJhaWxlcg%3D%3D',
            'important' =>true,
            'id_category' => 4
        ]);
    }
}
