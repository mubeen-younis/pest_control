<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\GeneralSetting;
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
       $this->call([
        FooterSeeder::class,
        AdminSeeder::class,
        ContactSeeder::class,
        GeneralSettingSeeder::class,
        ManageAboutUsSeeder::class,
        UserSeeder::class
       ]);
    }
}
