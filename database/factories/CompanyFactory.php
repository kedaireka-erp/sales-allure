<?php

namespace Database\Factories;

use App\Models\CompanyArea;
use App\Models\CompanyType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'phone_number' => $this->faker->phoneNumber,
            'company_type_id' => CompanyType::all()->random()->id,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'company_area_id' => CompanyArea::all()->random()->id,
            'postal_code' => $this->faker->postcode,
            'number_of_employees' => $this->faker->numberBetween(10, 100),
            'annual_revenue' => $this->faker->numberBetween(1000000, 100000000),
            'time_zone' => $this->faker->timezone,
            'description' => $this->faker->text,
            'linkedin_company' => $this->faker->url,
        ];
    }
}
