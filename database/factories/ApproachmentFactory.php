<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Contact;
use App\Models\Status;
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
            "status_id" => Status::all()->random()->id,
            "date" => $this->faker->date(),
            "note" => $this->faker->word(),
        ];
    }
}
