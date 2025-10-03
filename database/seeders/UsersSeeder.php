<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        array_map(function ($nombre, $apellidos, $telefono, $direccion, $email, $dni, $roles_id, $distritos_id){
            DB::table('users')->insert([
                'unique_id' => Str::uuid(),
                'nombres' => $nombre,
                'apellidos' => $apellidos,
                'genero' => 'MASCULINO',
                'telefono' => $telefono,
                // 'telefono_emergencia' => 'null',
                'direccion' => $direccion,
                'referencia' => 'Referencia',
                'dni' => $dni,
                'email' => $email,

                'password' => "CPHNXBJs5Ck0JWfgf3/GFBPU/fVyoiwr",
                // No se usa esta implementación debido a la falta de compatibilidad con jasypt de Java
                // 'password' => bcrypt('12345678'),

                'fecha_nacimiento' => '1990-01-01',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                'roles_id' => $roles_id,
                'distritos_id' => $distritos_id,
            ]);
        },[
            'Admin',
            'ClientePrueba01',
            'ClientePrueba02',
            'ClientePrueba03',
            'EmpleadoPrueba01',
            'EmpleadoPrueba02',
            'EmpleadoPrueba03',
            'ChóferPrueba01',
            'ChóferPrueba02',
            'ChóferPrueba03',
            'ChóferPrueba04',
        ],[
            'Admin Admin',
            'Martinez Martinez',
            'Perez Perez',
            'Gonzales Gonzales',
            'Solis Solis',
            'Garcia Garcia',
            'Lopez Lopez',
            'Quispe Quispe',
            'Yupanqui Yupanqui',
            'Pachacuti Pachacuti',
            'Atahualpa Atahualpa',
        ],[
            '929929292',
            '939393939',
            '949494949',
            '959595959',
            '969696969',
            '979797979',
            '989898989',
            '909090909',
            '919191919',
            '899899899',
            '889889889',
        ],[
            'Av. Arequipa 111',
            'Av. Arequipa 222',
            'Av. Arequipa 333',
            'Av. Arequipa 444',
            'Av. Arequipa 555',
            'Av. Arequipa 666',
            'Av. Arequipa 777',
            'Av. Arequipa 888',
            'Av. Arequipa 999',
            'Av. Arequipa 101010',
            'Av. Arequipa 111111',
        ],[
            'admin@admin.com',
            'cli@gmail.com',
            'cli2@gmail.com',
            'cli3@gmail.com',
            'emp@gmail.com',
            'emp2@gmail.com',
            'emp3@gmail.com',
            'chofer@gmail.com',
            'chofer2@gmail.com',
            'chofer3@gmail.com',
            'chofer4@gmail.com',
        ],[
            '11111111',
            '22222222',
            '33333333',
            '44444444',
            '55555555',
            '66666666',
            '77777777',
            '88888888',
            '99999999',
            '10101010',
            '11011011',
        ],[
            1,
            2,
            2,
            2,
            3,
            3,
            3,
            5,
            5,
            5,
            5,
        ],[
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
        ]);
    }
}
