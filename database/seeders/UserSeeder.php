<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([
            [
                'name' => 'Mubeen',
                'email' => 'mubeen@gmail.com',
                'password' => Hash::make('admin123'),
            ],
        ]);
        $users->each(function ($user) {
            User::insert($user);
        });
    }
}
