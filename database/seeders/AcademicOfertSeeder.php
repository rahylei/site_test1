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
            'name' => 'Ingenieria en sistemas',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('academic_oferts')->insert([
            'name' => 'Ingenieria en mecatronica',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('academic_oferts')->insert([
            'name' => 'Ingenieria en redes y telecomunicaciones',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
    }
}
