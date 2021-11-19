<?php

namespace Database\Factories;

use App\Models\Vaccine;
use App\Models\VaccineRegistration;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $registration = VaccineRegistration::all()->random(1)->first();
        $vaccine = Vaccine::all()->random(1)->first();

        return [
            'registration_id' => $registration->id,
            'vaccine_id' => $vaccine->id,
            'name' => $this->faker->name,
            'scheduled_at' => $this->faker->dateTimeThisYear,
            'vaccinated_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
