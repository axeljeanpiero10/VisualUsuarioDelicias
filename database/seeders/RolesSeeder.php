<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        array_map(function ($tipo){
            DB::table('roles')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $tipo,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        },[
            'Administrador',
            'Cliente',
            'Empleado',
            'Proveedor',
            'Chofer',
            
        ]);
    }
}
