<?php

namespace Database\Seeders;

use App\Models\VaccineRegistration;
use Illuminate\Database\Seeder;

class VaccineRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VaccineRegistration::factory()
            ->count(10)
            ->create();
    }
}
