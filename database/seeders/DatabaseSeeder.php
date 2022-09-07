<?php

namespace Database\Seeders;

use App\Models\Fppp;
use App\Models\Status;
use App\Models\Quotation;
use App\Models\DealSource;
use App\Models\CompanyArea;
use App\Models\CompanyType;
use App\Models\ContactType;
use Illuminate\Database\Seeder;
use Faker\Provider\ar_EG\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);


        CompanyType::factory(20)->create();

        ContactType::factory(20)->create();

        CompanyArea::factory(20)->create();

        DealSource::factory(10)->create();

        Status::factory(10)->create();
        
        Quotation::factory(20)->create();

        Fppp::factory(100)->create();


    }
}
