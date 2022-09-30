<?php

namespace Database\Factories;

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\proyekQuotation>
 */
class ProyekQuotationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quotation_id'=>Quotation::all()->random()->id,
            'no_quotation' => $this->faker->numberBetween(100,300).'/ASTRAL/'.$this->faker->numberBetween(0,100).'/AP'.$this->faker->numberBetween(0,100),
            'nama_proyek' => $this->faker->catchPhrase()
        ];
    }
}
