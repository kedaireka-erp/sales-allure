<?php

namespace Database\Seeders;

use App\Models\LeadSource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeadSource::create(["name"=>"Instagram"]);
        LeadSource::create(["name"=>"Gallery Artha Gading"]);
        LeadSource::create(["name"=>"Gallery Alam Sutera"]);
        LeadSource::create(["name"=>"Gallery Bandung"]);
        LeadSource::create(["name"=>"Gallery Bali"]);
        LeadSource::create(["name"=>"Gallery Surabaya"]);
        LeadSource::create(["name"=>"Gallery Kemang"]);
        LeadSource::create(["name"=>"Canvasing"]);
        LeadSource::create(["name"=>"Referensi"]);
        LeadSource::create(["name"=>"Proyek dari Aplikator"]);
        LeadSource::create(["name"=>"WhatsApp Business Astral"]);
        LeadSource::create(["name"=>"WhatsApp Business Alphamax"]);
    }
}
