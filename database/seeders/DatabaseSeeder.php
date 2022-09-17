<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Fppp;
use App\Models\Status;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Quotation;
use App\Models\DealSource;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\CompanyArea;
use App\Models\CompanyType;
use App\Models\ContactType;
use App\Models\DetailQuotation;
use Illuminate\Database\Seeder;

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
        $this->call(StatusSeeder::class);
        $this->call(DealSourceSeeder::class);
        $this->call(ActivitySeeder::class);

        CompanyType::factory(20)->create();

        ContactType::factory(20)->create();

        CompanyArea::factory(20)->create();

        LeadSource::factory(5)->create();

        LeadStatus::factory(20)->create();

        Company::factory(20)->create();
        
        Contact::factory(20)->create();

        Quotation::factory(20)->create();

        Fppp::factory(100)->create();

        DetailQuotation::factory(100)->create();

    }
}
