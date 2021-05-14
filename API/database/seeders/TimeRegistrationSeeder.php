<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeRegistrationSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $this->createTimeRegistrationsForEgonOlsen();
        $this->createTimeRegistrationsForBennyFrandsen();
        $this->createTimeRegistrationsForKjeldJensen();
        $this->createTimeRegistrationsForYvonneJensen();
    }

    private function createTimeRegistrationsForEgonOlsen(){
        $employeeId = DB::table('employee')
            ->where('name', '=', 'Egon Olsen')
            ->first()
            ->id;

        // Week 1
        $this->createTimeRegistration($employeeId, 1, 4, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 5, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 6, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 7, 8, 0);
        $this->createTimeRegistration($employeeId, 1, 8, 9, 0);

        // Week 2
        $this->createTimeRegistration($employeeId, 1, 11, 3, 30);
        $this->createTimeRegistration($employeeId, 1, 12, 4, 30);
        $this->createTimeRegistration($employeeId, 1, 13, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 14, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 15, 5, 0);

        // Week 3
        $this->createTimeRegistration($employeeId, 1, 18, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 19, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 20, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 21, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 22, 7, 0);

        // Week 4
        $this->createTimeRegistration($employeeId, 1, 25, 6, 0);
        $this->createTimeRegistration($employeeId, 1, 26, 6, 30);
        $this->createTimeRegistration($employeeId, 1, 27, 4, 30);
        $this->createTimeRegistration($employeeId, 1, 28, 11, 0);
        $this->createTimeRegistration($employeeId, 1, 29, 3, 0);

        // Week 5
        $this->createTimeRegistration($employeeId, 2, 1, 7, 24);
        $this->createTimeRegistration($employeeId, 2, 2, 7, 24);
        $this->createTimeRegistration($employeeId, 2, 3, 7, 24);
        $this->createTimeRegistration($employeeId, 2, 4, 7, 24);
        $this->createTimeRegistration($employeeId, 2, 5, 7, 0);
    }

    private function createTimeRegistrationsForBennyFrandsen(){
        $employeeId = DB::table('employee')
            ->where('name', '=', 'Benny Frandsen')
            ->first()
            ->id;

        // Week 1
        $this->createTimeRegistration($employeeId, 1, 4, 6, 30);
        $this->createTimeRegistration($employeeId, 1, 5, 6, 30);
        $this->createTimeRegistration($employeeId, 1, 6, 6, 30);
        $this->createTimeRegistration($employeeId, 1, 7, 6, 30);
        $this->createTimeRegistration($employeeId, 1, 8, 4, 0);

        // Week 2
        $this->createTimeRegistration($employeeId, 1, 11, 3, 30);
        $this->createTimeRegistration($employeeId, 1, 12, 4, 30);
        $this->createTimeRegistration($employeeId, 1, 13, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 14, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 15, 5, 0);

        // Week 3
        $this->createTimeRegistration($employeeId, 1, 18, 6, 0);
        $this->createTimeRegistration($employeeId, 1, 19, 6, 0);
        $this->createTimeRegistration($employeeId, 1, 20, 0, 0);
        $this->createTimeRegistration($employeeId, 1, 21, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 22, 7, 0);

        // Week 4
        $this->createTimeRegistration($employeeId, 1, 25, 7, 0);
        $this->createTimeRegistration($employeeId, 1, 26, 8, 30);
        $this->createTimeRegistration($employeeId, 1, 27, 11, 30);
        $this->createTimeRegistration($employeeId, 1, 28, 0, 0);
        $this->createTimeRegistration($employeeId, 1, 29, 0, 0);

        // Week 5
        $this->createTimeRegistration($employeeId, 2, 1, 7, 30);
        $this->createTimeRegistration($employeeId, 2, 2, 7, 30);
        $this->createTimeRegistration($employeeId, 2, 3, 7, 30);
        $this->createTimeRegistration($employeeId, 2, 4, 7, 30);
        $this->createTimeRegistration($employeeId, 2, 5, 0, 0);
    }

    private function createTimeRegistrationsForKjeldJensen(){
        $employeeId = DB::table('employee')
            ->where('name', '=', 'Kjeld Jensen')
            ->first()
            ->id;

        // Week 1
        $this->createTimeRegistration($employeeId, 1, 4, 8, 0);
        $this->createTimeRegistration($employeeId, 1, 5, 8, 0);
        $this->createTimeRegistration($employeeId, 1, 6, 8, 0);
        $this->createTimeRegistration($employeeId, 1, 7, 8, 0);
        $this->createTimeRegistration($employeeId, 1, 8, 8, 0);

        // Week 2
        $this->createTimeRegistration($employeeId, 1, 11, 8, 0);
        $this->createTimeRegistration($employeeId, 1, 12, 8, 30);
        $this->createTimeRegistration($employeeId, 1, 13, 8, 30);
        $this->createTimeRegistration($employeeId, 1, 14, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 15, 5, 0);

        // Week 3
        $this->createTimeRegistration($employeeId, 1, 18, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 19, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 20, 11, 30);
        $this->createTimeRegistration($employeeId, 1, 21, 8, 30);
        $this->createTimeRegistration($employeeId, 1, 22, 8, 0);

        // Week 4
        $this->createTimeRegistration($employeeId, 1, 25, 10, 0);
        $this->createTimeRegistration($employeeId, 1, 26, 10, 30);
        $this->createTimeRegistration($employeeId, 1, 27, 14, 30);
        $this->createTimeRegistration($employeeId, 1, 28, 7, 0);
        $this->createTimeRegistration($employeeId, 1, 29, 3, 0);

        // Week 5
        $this->createTimeRegistration($employeeId, 2, 1, 0, 0);
        $this->createTimeRegistration($employeeId, 2, 2, 0, 0);
        $this->createTimeRegistration($employeeId, 2, 3, 0, 0);
        $this->createTimeRegistration($employeeId, 2, 4, 0, 0);
        $this->createTimeRegistration($employeeId, 2, 5, 0, 0);
    }

    private function createTimeRegistrationsForYvonneJensen(){
        $employeeId = DB::table('employee')
            ->where('name', '=', 'Yvonne Jensen')
            ->first()
            ->id;

        // Week 1
        $this->createTimeRegistration($employeeId, 1, 4, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 5, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 6, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 7, 7, 30);
        $this->createTimeRegistration($employeeId, 1, 8, 7, 0);

        // Week 2
        $this->createTimeRegistration($employeeId, 1, 11, 8, 30);
        $this->createTimeRegistration($employeeId, 1, 12, 9, 30);
        $this->createTimeRegistration($employeeId, 1, 13, 0, 30);
        $this->createTimeRegistration($employeeId, 1, 14, 0, 30);
        $this->createTimeRegistration($employeeId, 1, 15, 12, 0);

        // Week 3
        $this->createTimeRegistration($employeeId, 1, 18, 9, 30);
        $this->createTimeRegistration($employeeId, 1, 19, 8, 30);
        $this->createTimeRegistration($employeeId, 1, 20, 10, 30);
        $this->createTimeRegistration($employeeId, 1, 21, 12, 30);
        $this->createTimeRegistration($employeeId, 1, 22, 7, 0);

        // Week 4
        $this->createTimeRegistration($employeeId, 1, 25, 7, 0);
        $this->createTimeRegistration($employeeId, 1, 26, 7, 0);
        $this->createTimeRegistration($employeeId, 1, 27, 10, 30);
        $this->createTimeRegistration($employeeId, 1, 28, 11, 0);
        $this->createTimeRegistration($employeeId, 1, 29, 3, 0);

        // Week 5
        $this->createTimeRegistration($employeeId, 2, 1, 7, 24);
        $this->createTimeRegistration($employeeId, 2, 2, 0, 12);
        $this->createTimeRegistration($employeeId, 2, 3, 0, 6);
        $this->createTimeRegistration($employeeId, 2, 4, 0, 8); // Missing 0,4 minutes
        $this->createTimeRegistration($employeeId, 2, 5, 0, 10); // Account for missing -0.4
    }

    private function createTimeRegistration(int $employeeId, int $month, int $date, int $hours, int $minutes = 0){
        if($hours > 0 || $minutes > 0){
            DB::table('time_registration')->insert([
                'start' => Carbon::create(2021, $month, $date, 8, 0, 0),
                'end' => Carbon::create(2021, $month, $date, 8 + $hours, $minutes, 0),
                'employee_id' => $employeeId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
