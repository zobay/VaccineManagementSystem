<?php

namespace Database\Factories;

use App\Models\Center;
use Illuminate\Database\Eloquent\Factories\Factory;

class VaccineRegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $center = Center::all()->random(1)->first();

        return [
            'center_id' => $center->id,
            'nid' => generateRandomDigit(13),
            'name' => $this->faker->name,
            'dob' => $this->faker->date(),
            'phone' => generateRandomDigit(11),
            'phone_verified_at' => $this->faker->date(),
        ];
    }
}
