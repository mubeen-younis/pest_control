<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use HasFactory;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
        'website_name' => 'Bonsa',
        'favicon' => 'assets/img/1.png',
        'logo' => 'assets/img/2.png',
        'title' => 'Root4Tech',
        'subtitle' => 'We Provides Web and Mobile Development Services',
        'paragraph' => 'We Provides Web and Mobile Development Services. We have a committed abd dedicated team.',
        'button_left' => 'Sign In',
        'button_right' => 'Our Portfolio',
        'banner_image' => 'assets/img/3.png'

        ]);

    }
}
