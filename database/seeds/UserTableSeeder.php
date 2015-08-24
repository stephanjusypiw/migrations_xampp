<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate the user table of data first
        // ie.  drop the data first
        User::truncate();

        // Create 2 User objects
        $user1 = new User();
        $user1->username = 'john';
        $user1->fullname = 'John Lennon';
        $user1->email = 'john@example.com';
        $user1->password = bcrypt("passwprd");
        $user1->save();

        $user2 = new User();
        $user2->username = 'Paul';
        $user2->fullname = 'Paul MacCartney';
        $user2->email = 'paul@example.com';
        $user2->password = bcrypt("passwprd");
        $user2->save();

    }
}
