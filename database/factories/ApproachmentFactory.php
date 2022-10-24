<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Contact;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Approachment>
 */
class ApproachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "contact_id" => Contact::all()->random()->id,
            "activity_id" => Activity::all()->random()->id,
            "user_id" => User::all()->random()->id,
            "status_id" => $this->faker->numberBetween(7, 9),
            "date" => $this->faker->date(),
            "note" => $this->faker->sentence(),
        ];
    }
}
