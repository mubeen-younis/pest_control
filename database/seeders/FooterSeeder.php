<?php

namespace Database\Seeders;

use App\Models\FooterMain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FooterMain::create([
            
            'title' => 'This is logo section',
            'logo' => 'assets/img/3.png'
    
            ]);
    }
}
