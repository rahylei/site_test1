<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmissionProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admission_profiles')->insert([
            'conocimientos' => 'Ciencia en general#Fisica#Matematicas',
            'habilidades' => 'Cooperacion#Integracion#Manejo de TI#Razonamiento matematico',
            'aptitudes' => 'Adaptabilidad al cambio#Autoevaluacion#Diciplina#Proactivo#Responsabilidad#Trabajo en equipo',
            'academic_ofert' => 1,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
    }
}
