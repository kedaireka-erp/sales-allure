<?php

namespace Database\Factories;

use App\Models\Fppp;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
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
            "fppp_id"=> Fppp::all()->random()->id,
            "name"=>$this->faker->text(),
            "path"=>$this->faker->text(),
        ];
    }
}
