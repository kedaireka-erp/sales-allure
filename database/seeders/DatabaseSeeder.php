<?php

namespace Database\Seeders;

use App\Models\CompanyType;
use App\Models\ContactType;
use Faker\Provider\ar_EG\Company;
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

        \App\Models\Fppp::factory(100)->create();

        CompanyType::factory(20)->create();

        ContactType::factory(20)->create();

    }
}
