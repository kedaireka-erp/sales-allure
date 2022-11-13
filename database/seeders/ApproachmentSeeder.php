<?php

namespace Database\Seeders;

use App\Models\Approachment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApproachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Approachment::factory(100)->create();
    }
}
