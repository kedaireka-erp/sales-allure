<?php

namespace Database\Seeders;

use App\Models\Fppp;
use App\Models\User;
use App\Models\Status;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Activity;
use App\Models\Quotation;
use App\Models\DealSource;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\CompanyArea;
use App\Models\CompanyType;
use App\Models\ContactType;
use App\Models\Approachment;
use App\Models\LeadInterest;
use App\Models\LeadPriority;
use App\Models\DetailQuotation;
use App\Models\MasterAplikator;
use App\Models\ProyekQuotation;
use Illuminate\Database\Seeder;
use Database\Seeders\FpppSeeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Reset every tables
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Status::truncate();
        DealSource::truncate();
        Activity::truncate();
        LeadInterest::truncate();
        LeadSource::truncate();
        LeadPriority::truncate();
        LeadStatus::truncate();
        CompanyType::truncate();
        CompanyArea::truncate();
        ContactType::truncate();
        Company::truncate();
        Contact::truncate();
        MasterAplikator::truncate();
        ProyekQuotation::truncate();
        Quotation::truncate();
        DetailQuotation::truncate();
        Approachment::truncate();
        Fppp::truncate();
        Schema::enableForeignKeyConstraints();
        //End reset

        $this->call(UserSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(DealSourceSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(LeadInterestSeeder::class);
        $this->call(LeadSourceSeeder::class);
        $this->call(LeadPrioritySeeder::class);
        $this->call(LeadStatusSeeder::class);
        $this->call(CompanyTypeSeeder::class);
        $this->call(CompanyAreaSeeder::class);
        $this->call(ContactTypeSeeder::class);

        Company::factory(20)->create();

        Contact::factory(20)->create();

        MasterAplikator::factory(15)->create();

        ProyekQuotation::factory(20)->create();

        // Quotation::factory(20)->create();

        DetailQuotation::factory(100)->create();

        Approachment::factory(100)->create();

        $this->call(FpppSeeder::class);
    }
}
