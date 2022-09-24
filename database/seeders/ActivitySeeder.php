<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Activity::factory()->create(["name"=>"Zoom Meeting"]);
        Activity::factory()->create(["name"=>"WhatsApp Chat"]);
        Activity::factory()->create(["name"=>"Google Meet"]);
        Activity::factory()->create(["name"=>"Telepon"]);
        Activity::factory()->create(["name"=>"Bertemu langsung"]);
        Activity::factory()->create(["name"=>"SMS"]);

    }
}
