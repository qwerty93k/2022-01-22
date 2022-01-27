<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ //turi pasileisti tokia pat tvarka kaip ir migracijos
            SchoolSeeder::class,
            AttendanceGroupSeeder::class,
            StudentSeeder::class
        ]);
    }
}
