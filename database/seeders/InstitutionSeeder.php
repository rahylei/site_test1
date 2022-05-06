<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('institutions')->insert([
            'name' => 'MENSAJE DEL RECTOR',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'HISTORIA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'FILOSOFIA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'MODELO EDUCATIVO',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'MASCOTAS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'MARCO JURIDICO',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'ORGANIGRAMA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'DIRECTORIO',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'UBICACION',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'INSTALACIONES',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'IGUALDAD LABORAL Y NO LABORAL',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('institutions')->insert([
            'name' => 'SISTEMA DE GESTION DE CALIDAD',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
