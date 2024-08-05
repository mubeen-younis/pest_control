<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = collect([
            [
                'name' => fake()->name(),
                'email' => fake()->email(),
                'phone_number' => fake()->phoneNumber(),
                'msg_subject' => fake()->text(),
                'message' => fake()->text(),
            ],

            // [
            //     'name' => 'Moiz',
            //     'email' => 'moiz@gmail.com',
            //     'phone_number' => '1234764634789',
            //     'msg_subject' => 'Hello there!',
            //     'message' => 'Where are you Going',
            // ],

            // [
            //     'name' => 'Muzmmal',
            //     'email' => 'muuzmmal@gmail.com',
            //     'phone_number' => '0987654321',
            //     'msg_subject' => 'Hello there!',
            //     'message' => 'Where are you Going',
            // ],
        ]);
        $contacts->each(function($contact){
Contact::insert($contact);
        });
//     }
}
};