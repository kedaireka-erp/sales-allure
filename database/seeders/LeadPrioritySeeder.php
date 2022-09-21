<?php

namespace Database\Seeders;

use App\Models\LeadPriority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadPrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeadPriority::create(["name"=>"Low Potential"]);
        LeadPriority::create(["name"=>"Middle Potential"]);
        LeadPriority::create(["name"=>"High Potential"]);
    }
}
