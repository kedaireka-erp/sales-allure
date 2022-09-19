<?php

namespace Database\Seeders;

use App\Models\LeadInterest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeadInterest::create(["name"=>"Allure"]);
        LeadInterest::create(["name"=>"Aluplus"]);
        LeadInterest::create(["name"=>"Astral"]);
        LeadInterest::create(["name"=>"Alphamax"]);
        LeadInterest::create(["name"=>"Astral Interior"]);
        LeadInterest::create(["name"=>"Polarisa Kitchen"]);
        LeadInterest::create(["name"=>"High Rise Building"]);
        LeadInterest::create(["name"=>"Astral Bravo"]);
    }
}
