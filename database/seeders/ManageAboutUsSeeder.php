<?php

namespace Database\Seeders;

use App\Models\ManageAboutUs;
use Illuminate\Database\Seeder;

class ManageAboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ManageAboutUs::create([
            'title' => 'Root4Tech',
            'description' => 'Root4Tech is a pioneering software development company dedicated to revolutionizing businesses through innovation and technology. With a relentless commitment to excellence, we specialize in crafting bespoke software solutions that empower enterprises to thrive in a rapidly evolving digital landscape.',
            'image' => 'assets/img/3.png',

        ]);
    }
}
