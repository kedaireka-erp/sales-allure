<?php

namespace Database\Seeders;

use App\Models\ContactType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactType::create(["name"=>"Architect"]);
        ContactType::create(["name"=>"Contractor"]);
        ContactType::create(["name"=>"Owner"]);
        ContactType::create(["name"=>"Wakil Owner"]);
        ContactType::create(["name"=>"Main Contractor"]);
        ContactType::create(["name"=>"Quantity Surveyor"]);
        ContactType::create(["name"=>"Pelaksana"]);
        ContactType::create(["name"=>"Authorized Distributor"]);
        ContactType::create(["name"=>"Canvasing"]);
        ContactType::create(["name"=>"Referensi"]);
        ContactType::create(["name"=>"Design Interior"]);
    }
}
