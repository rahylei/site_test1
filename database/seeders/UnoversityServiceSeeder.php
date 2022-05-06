<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnoversityServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unoversity_services')->insert([
            'name' => 'DIFUSION UNIVERSITARIA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('unoversity_services')->insert([
            'name' => 'SERVICIOS ESTUDIANTILES',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unoversity_services')->insert([
            'name' => 'MODALIDAD ACADEMICA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unoversity_services')->insert([
            'name' => 'BIBLIOTECA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unoversity_services')->insert([
            'name' => 'EDUCACION CONTINUA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('unoversity_services')->insert([
            'name' => 'BOLSA DE TRABAJO',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('unoversity_services')->insert([
            'name' => 'FORO DE CONSULTA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
