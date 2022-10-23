<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\Contact;
use App\Models\DealSource;
use App\Models\MasterAplikator;
use App\Models\ProyekQuotation;
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
            'no_quotation' => $this->faker->numberBetween(100, 300) . '/ASTRAL/' . $this->faker->numberBetween(0, 100) . '/AP' . $this->faker->numberBetween(0, 100),
            'nama_proyek' => $this->faker->catchPhrase(),
            'status_quotation' => $this->faker->numberBetween(1, 3),
        ];
    }
}
