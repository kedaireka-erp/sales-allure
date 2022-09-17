<?php

namespace Database\Factories;

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fppp>
 */
class DetailQuotationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id_quotation"=>Quotation::all()->random()->id,
            "id_kode_gambar"=>$this->faker->numberBetween(1,10),
            "lokasi"=>$this->faker->city(),
            "kode_item"=> "FX",
            "kode_tipe"=>$this->faker->randomElement(["ba", "tamb", "revi", "lain"]),
            "daun"=>$this->faker->catchPhrase(),
            "kode_warna"=>$this->faker->hexColor(),
            "panjang"=>$this->faker->numberBetween(50,400),
            "lebar"=>$this->faker->numberBetween(10,100),
            "harga"=>$this->faker->numberBetween(50000,400000),
            "qty"=>$this->faker->numberBetween(1,10)];
    }
}
