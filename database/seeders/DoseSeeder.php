<?php

namespace Database\Seeders;

use App\Models\Dose;
use Illuminate\Database\Seeder;

class DoseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dose::factory()
            ->count(10)
            ->create();
    }
}
