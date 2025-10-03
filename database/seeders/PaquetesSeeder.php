<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PaquetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $paquetes = [
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete Básico',
                'descripcion' => 'Acceso ilimitado al gimnasio durante un mes',
                'precio' => 30.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete Estándar',
                'descripcion' => 'Acceso ilimitado al gimnasio durante tres meses',
                'precio' => 75.00,
                'duracion' => 90,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete Premium',
                'descripcion' => 'Acceso ilimitado al gimnasio durante seis meses',
                'precio' => 120.00,
                'duracion' => 180,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de Entrenamiento Personal',
                'descripcion' => 'Entrenamiento personalizado durante un mes',
                'precio' => 150.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de Entrenamiento en Grupo',
                'descripcion' => 'Acceso a clases de entrenamiento en grupo durante un mes',
                'precio' => 60.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de Verano',
                'descripcion' => 'Acceso ilimitado al gimnasio durante los meses de verano',
                'precio' => 50.00,
                'duracion' => 90,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de Fin de Semana',
                'descripcion' => 'Acceso al gimnasio solo los fines de semana',
                'precio' => 20.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de Yoga',
                'descripcion' => 'Clases de yoga dos veces por semana durante un mes',
                'precio' => 40.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de CrossFit',
                'descripcion' => 'Clases de CrossFit tres veces por semana durante un mes',
                'precio' => 60.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete Estudiantil',
                'descripcion' => 'Descuento para estudiantes con acceso ilimitado al gimnasio durante un mes',
                'precio' => 25.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete Familiar',
                'descripcion' => 'Descuento para familias con acceso ilimitado al gimnasio durante un mes',
                'precio' => 80.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de Prueba',
                'descripcion' => 'Acceso limitado al gimnasio durante una semana',
                'precio' => 10.00,
                'duracion' => 7,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de Renovación',
                'descripcion' => 'Renovación del paquete estándar por tres meses más',
                'precio' => 70.00,
                'duracion' => 90,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de Nutrición',
                'descripcion' => 'Asesoramiento en nutrición y plan de comidas durante un mes',
                'precio' => 45.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de Flexibilidad',
                'descripcion' => 'Clases de flexibilidad y estiramiento dos veces por semana durante un mes',
                'precio' => 35.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unique_id' => Str::uuid(),
                'nombre' => 'Paquete de Baile',
                'descripcion' => 'Clases de baile una vez por semana durante un mes',
                'precio' => 30.00,
                'duracion' => 30,
                'estado' => 'ACTIVO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($paquetes as $paquete) {
            DB::table('paquetes')->insert($paquete);
        }
    }
}
