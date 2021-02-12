<?php

namespace Database\Seeders;

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
        $this->call(adminSeeder::class);
        $this->call(agenttypeSeeder::class);
        $this->call(bankSeeder::class);
        $this->call(citySeeder::class);
        $this->call(districtSeeder::class);
        $this->call(provinceSeeder::class);
    }
}
