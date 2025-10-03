<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DistritosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        array_map(function ($distritos){
            DB::table('distritos')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $distritos,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                // 'departamento_id' => 4,
            ]);
        },[
            'Arequipa',
            'Alto Selva Alegre',
            'Cayma',
            'Cerro Colorado',
            'Characato',
            'Chiguata',
            'Jacobo Hunter',
            'José Luis Bustamante y Rivero',
            'La Joya',
            'Mariano Melgar',
            'Miraflores',
            'Mollebaya',
            'Paucarpata',
            'Pocsi',
            'Polobaya',
            'Quequeña',
            'Sabandía',
            'Sachaca',
            'San Juan de Siguas',
            'San Juan de Tarucani',
            'Santa Isabel de Siguas',
            'Santa Rita de Siguas',
            'Socabaya',
            'Tiabaya',
            'Uchumayo',
            'Vitor',
            'Yanahuara',
            'Yarabamba',
            'Yura',
        ]);
    }
}
