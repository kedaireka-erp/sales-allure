<?php

namespace Database\Factories;

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
            "fppp_no"=>"021/FPPP/AST/09/2022",
            "fppp_type"=>$this->faker->randomElement(["produksi", "memo"]),
            "production_phase"=>$this->faker->numberBetween(1,10),
            "order_status"=>$this->faker->randomElement(["baru", "tambahan", "revisino", "lainlain"]),
            "production_time"=>$this->faker->numberBetween(1,10),
            "color"=>$this->faker->word(),
            "glass"=>$this->faker->randomElement(["included", "excluded", "included_excluded"]),
            "glass_type"=>$this->faker->word(),
            "retrieval_deadline"=>$this->faker->date(),
            "box_usage"=>$this->faker->randomElement(["tidak", "ya"]),
            "sealant_usage"=>$this->faker->randomElement(["tidak", "ya"]),
            "delivery_to_expedition"=>$this->faker->randomElement(["tidak", "ya"]),
            "note"=>$this->faker->word(),

        ];
    }
}
