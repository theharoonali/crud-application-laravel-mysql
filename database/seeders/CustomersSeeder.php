<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;
use Faker\Factory as Faker;
use Hash;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=0;$i<20;$i++){
       $faker = Faker::create();
       $customer = new Customer;
       $customer->firstname = $faker->firstname;
       $customer->lastname = $faker->lastname;
       $customer->email = $faker->email;
       $customer->phoneno = 3138167990;
       $customer->comments = "No Comment";
       $customer->gender = "Male" ;
       $customer->save();}

       $user = new User;
       $user->name = "Admin";
       $user->email = "admin@admin.com";
       $user->password = Hash::make(112233);
       $user->save();
    }
}
