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
            
            'contact_id'=>Contact::all()->random()->id,
            'deal_source_id' => DealSource::all()->random()->id,
            'status_id' => Status::WhereIn('name', ['Won', 'Negosiasi'])->get()->random()->id,
            'aplikator_id' => MasterAplikator::all()->random()->id,
            'proyek_quotation_id' => ProyekQuotation::all()->random()->id,
            'keterangan' => $this->faker->realText($maxNbChars = 200, $indexSize = 2)
        ];
    }
}
