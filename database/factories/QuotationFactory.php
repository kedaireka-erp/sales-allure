<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Status;
use App\Models\DealSource;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quotation>
 */
class QuotationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no_quotation' => $this->faker->numberBetween(100,300).'/ASTRAL/'.$this->faker->numberBetween(0,100).'/AP'.$this->faker->numberBetween(0,100),
            'contact_id'=>Contact::all()->random()->id,
            'deal_source_id' => DealSource::all()->random()->id,
            'status_id' => Status::all()->random()->id,
            'keterangan' => $this->faker->realText($maxNbChars = 200, $indexSize = 2)
        ];
    }
}
