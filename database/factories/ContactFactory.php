<?php

namespace Database\Factories;

use App\Models\Company;
use Faker\Guesser\Name;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\ContactType;
use App\Models\LeadPriority;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'company_id'=>Company::all()->random()->id,
            'contact_type_id'=>ContactType::all()->random()->id,
            'lead_source_id'=>LeadSource::all()->random()->id,
            'lead_status_id'=>LeadStatus::all()->random()->id,
            'lead_priority_id'=>LeadPriority::all()->random()->id,
            'email'=> $this->faker->email(),
            'address'=> $this->faker->address(),
            'phone'=> $this->faker->phoneNumber(),
            'note'=> $this->faker->text(),
        ];
    }
}
