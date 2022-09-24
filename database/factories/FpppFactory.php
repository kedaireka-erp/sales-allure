<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fppp>
 */
class FpppFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "fppp_no"=>"",
            "fppp_type"=>$this->faker->randomElement(["produksi", "memo"]),
            "production_phase"=>$this->faker->numberBetween(1,10),
            "quotation_id"=> Quotation::all()->random()->id,
            "order_status"=>$this->faker->randomElement(["baru", "tambahan", "revisino", "lainlain"]),
            "production_time"=>$this->faker->numberBetween(1,10),
            "color"=>$this->faker->word(),
            "glass"=>$this->faker->randomElement(["included", "excluded", "included_excluded"]),
            "glass_type"=>$this->faker->word(),
            "retrieval_deadline"=>$this->faker->date(),
            "box_usage"=>$this->faker->numberBetween(0,1),
            "sealant_usage"=>$this->faker->numberBetween(0,1),
            "delivery_to_expedition"=>$this->faker->numberBetween(0,1),
            "note"=>$this->faker->word(),
        ];
    }
}
