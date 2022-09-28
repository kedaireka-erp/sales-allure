<?php

namespace Database\Seeders;

use App\Models\CompanyType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyType::create(["name"=>"Architect"]);
        CompanyType::create(["name"=>"Contractor"]);
        CompanyType::create(["name"=>"Owner"]);
        CompanyType::create(["name"=>"Wakil Owner"]);
        CompanyType::create(["name"=>"Main Contractor"]);
        CompanyType::create(["name"=>"Quantity Surveyor"]);
        CompanyType::create(["name"=>"Pelaksana"]);
        CompanyType::create(["name"=>"Authorized Distributor"]);
        CompanyType::create(["name"=>"Canvasing"]);
        CompanyType::create(["name"=>"Referensi"]);
        CompanyType::create(["name"=>"Design Interior"]);
    }
}
