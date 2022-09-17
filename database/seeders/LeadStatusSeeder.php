<?php

namespace Database\Seeders;

use App\Models\LeadStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeadStatus::create(["name"=>"Prospek Baru"]);
        LeadStatus::create(["name"=>"Renovasi"]);
        LeadStatus::create(["name"=>"Bangun Rumah"]);
        LeadStatus::create(["name"=>"Just Asking"]);
        LeadStatus::create(["name"=>"Share Gambar"]);
    }
}
