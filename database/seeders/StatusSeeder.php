<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Status::factory()->create(["name" => "Quotation Sent"]);
        Status::factory()->create(["name" => "Won"]);
        Status::factory()->create(["name" => "Revisi Quotation"]);
        Status::factory()->create(["name" => "Negosiasi"]);
        Status::factory()->create(["name" => "Target Omset"]);
        Status::factory()->create(["name" => "Invoice"]);
        Status::factory()->create(["name" => "Lost", "model" => "approachment"]);
        Status::factory()->create(["name" => "Pending", "model" => "approachment"]);
        Status::factory()->create(["name" => "Deal", "model" => "approachment"]);
    }
}
