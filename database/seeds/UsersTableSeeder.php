<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        User::truncate();

        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('12345678');
        
        //Create a one for me
        User::create([
            'name' => "Admin",
            'email' => "admin@rkb.com ",
            'password' => $password,
        ]);

        // let's generate more users for our app
        for ($i = 0; $i < 10; $i++){
            User::create([
                'name' => $faker->name, // What is this name?
                'email' => $faker->email, // what is this?
                'password' => $password,
            ]);
        }



    }
}
