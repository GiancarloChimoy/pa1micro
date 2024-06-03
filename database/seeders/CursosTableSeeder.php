<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cursos')->insert([
            [
                'codigo' => 'CS101',
                'nombre' => 'Matemática',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => 'CS102',
                'nombre' => 'Comunicación',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => 'CS103',
                'nombre' => 'Historia y Geografía',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
