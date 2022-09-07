<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use App\Models\ContactType;
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
            'contact_type_id'=>ContactType::all()->random()->id,
            'email'=> $this->faker->email(),
            'address'=> $this->faker->address(),
        ];
    }
}
