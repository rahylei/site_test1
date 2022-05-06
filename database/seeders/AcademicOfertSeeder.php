<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicOfertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        
        DB::table('academic_oferts')->insert([
            'name' => 'INGENIERIA EN MECATRONICA',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('academic_oferts')->insert([
            'name' => 'INGENIERIA EN SISTEMAS COMPUTACIONALES',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('academic_oferts')->insert([
            'name' => 'INGENIERIA EN TECNOLOGUIA AUTOMOTRIZ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(), 
        ]);

        DB::table('academic_oferts')->insert([
            'name' => 'INGENIERIA EN TECNOLOGUIAS DE MANUFACTURA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('academic_oferts')->insert([
            'name' => 'INGENIERIA EN REDES Y TELECOMUNICACIONES',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('academic_oferts')->insert([
            'name' => 'LICENCIATURA EN ADMINISTRACION Y GESTION EMPRESARIAL',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('academic_oferts')->insert([
            'name' => 'LICANCIATURA EN NEGOCIOS INTERNACIONALES',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('academic_oferts')->insert([
            'name' => 'MAESTRIA EN INGENIERIA EN SISTEMAS PRODUCTIVOS E INDUSTRIA 4.0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('academic_oferts')->insert([
            'name' => 'MAESTRIA EN INGENIARIA ADMINISTRATIVA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
    }
}
