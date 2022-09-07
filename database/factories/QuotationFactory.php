<?php

namespace Database\Factories;

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
            'no_quotation' => '123/'.$this->faker->numberBetween(100,300).'/'.$this->faker->numberBetween(0,100),
            'deal_source_id' => DealSource::all()->random()->id,
            'status_id' => Status::all()->random()->id,
            'keterangan' => $this->faker->realText($maxNbChars = 200, $indexSize = 2)
        ];
    }
}
