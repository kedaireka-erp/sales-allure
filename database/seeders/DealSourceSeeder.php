<?php

namespace Database\Seeders;

use App\Models\DealSource;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DealSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DealSource::factory()->create(["name"=>"Instagram"]);
        DealSource::factory()->create(["name"=>"Gallery Artha Gading"]);
        DealSource::factory()->create(["name"=>"Gallery Alam Sutera"]);
        DealSource::factory()->create(["name"=>"Gallery Bandung"]);
        DealSource::factory()->create(["name"=>"Gallery Bali"]);
        DealSource::factory()->create(["name"=>"Gallery Surabaya"]);
        DealSource::factory()->create(["name"=>"Gallery Kemang"]);
        DealSource::factory()->create(["name"=>"Canvasing"]);
        DealSource::factory()->create(["name"=>"Referensi"]);
        DealSource::factory()->create(["name"=>"Proyek dari Aplikator"]);
        DealSource::factory()->create(["name"=>"WhatsApp Business Astral"]);
        DealSource::factory()->create(["name"=>"WhatsApp Business Alphamax"]);
    }
}
