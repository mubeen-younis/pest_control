<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = collect([
            [
                'name' => 'Mubeen Younis',
                'email' => 'mubeen123@gmail.com',
                'password' => Hash::make('admin123'),
            ],
        ]);
        $admins->each(function ($admin) {
            Admin::insert($admin);
        });
    }
}
