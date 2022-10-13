<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->delete();
        $patients = Patient::factory()->count(50)->create();
    }
}
