<?php

namespace Database\Seeders;

use App\Models\CompanyArea;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanyAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyArea::create(["name"=>"Jakarta"]);
        CompanyArea::create(["name"=>"Bandung"]);
        CompanyArea::create(["name"=>"Semarang"]);
        CompanyArea::create(["name"=>"Jogjakarta"]);
        CompanyArea::create(["name"=>"Solo"]);
        CompanyArea::create(["name"=>"Surabaya"]);
        CompanyArea::create(["name"=>"Bali"]);
        CompanyArea::create(["name"=>"Samarinda"]);
        CompanyArea::create(["name"=>"Tangerang"]);
        CompanyArea::create(["name"=>"Makassar"]);
        CompanyArea::create(["name"=>"Medan"]);
        CompanyArea::create(["name"=>"Palembang"]);
        CompanyArea::create(["name"=>"Jambi"]);
    }
}
