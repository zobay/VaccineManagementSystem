<?php

namespace Database\Seeders;

use App\Models\Center;
use Database\Factories\CenterFactory;
use Illuminate\Database\Seeder;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Center::factory()
            ->count(10)
            ->create();
    }
}
