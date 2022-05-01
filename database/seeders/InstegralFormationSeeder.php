<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstegralFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('instegral_formations')->insert([
            'name' => 'Desarrollo Humano',
            'created_at' => Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('instegral_formations')->insert([
            'name' => 'Lengua Extranjera',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
