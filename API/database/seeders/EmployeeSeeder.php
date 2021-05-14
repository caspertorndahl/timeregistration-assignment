<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('employee')->insert([
            'name' => 'Egon Olsen',
            'work_hours_per_week' => 37,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('employee')->insert([
            'name' => 'Benny Frandsen',
            'work_hours_per_week' => 30,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('employee')->insert([
            'name' => 'Kjeld Jensen',
            'work_hours_per_week' => 40,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('employee')->insert([
            'name' => 'Yvonne Jensen',
            'work_hours_per_week' => 36,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
