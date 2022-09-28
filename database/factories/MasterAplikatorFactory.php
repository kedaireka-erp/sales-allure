<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterAplikator>
 */
class MasterAplikatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "kode"=>$this->faker->numberBetween(1,10).$this->faker->numberBetween(50,100).$this->faker->numberBetween(1,500),
            "aplikator"=>$this->faker->name(),
            "alamat"=> $this->faker->address(),
            "logo"=>$this->faker->randomElement(["ba", "tamb", "revi", "lain"]),
            "email"=>$this->faker->unique()->safeEmail(),
            "password"=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            "id_status"=>1,
            "penginput"=>$this->faker->name(),
            "login_stat"=>$this->faker->numberBetween(50000,400000)];
    }
}
