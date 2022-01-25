<?php

namespace Database\Seeders;

use App\Models\AttendanceGroup;
use Illuminate\Database\Seeder;

class AttendanceGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttendanceGroup::factory()->count(15)->create();
    }
}
