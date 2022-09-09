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
            'company_type_id' => CompanyType::all()->random()->id,
            'company_area_id' => CompanyArea::all()->random()->id,
            'phone_number' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'description' => $this->faker->text,
        ];
    }
}
