<?php

namespace Database\Seeders;

use App\Models\Vaccine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::statement('SET FOREIGN_KEY_CHECKS=0;');
       DB::table('users')->truncate();
       DB::table('centers')->truncate();
       DB::table('doses')->truncate();
       DB::table('vaccine_registration')->truncate();
       DB::table('vaccines')->truncate();
       DB::table('SET FOREIGN_KEY_CHECKS=1;');

       $this->call([
           CenterSeeder::class,
           UserSeeder::class,
           VaccineSeeder::class,
           VaccineRegistrationSeeder::class,
           DoseSeeder::class
       ]);
    }
}
